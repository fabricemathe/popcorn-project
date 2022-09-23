<?php
$errors = [];

$title = '';
$price = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

if (!is_dir('images')) {
mkdir('images');
}
 
if (empty($errors))  { 

$image = $_FILES['image'] ?? null;
$imagePath = '';

if ($image && $image['tmp_name']) {

    $imagePath = 'images/'.randomString(8).'/'.$image['name'];
    mkdir(dirname($imagePath));

    move_uploaded_file($image['tmp_name'], $imagePath);
}

$statement = $pdo->prepare('INSERT INTO products(title, image, description, price, create_date) VALUES(:title, :image, :description, :price, :date)');
$statement->bindValue(':title', $title);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':date', $date);
$statement->execute();

header('Location: index.php');
}
}

function randomString($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }
    return $str;
}
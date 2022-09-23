<?php
require 'dtb.php';

$titre = '';
$description = '';
$contenu = '';
$path = '';
$fautes = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$titre = htmlspecialchars(trim($_POST['titre']));
$description = htmlspecialchars(trim($_POST['description']));
$contenu = htmlspecialchars(trim($_POST['contenu']));
$date = date('Y-m-d H:i:s');

if (!$titre || !$description || !$contenu) {
$fautes[] = 'Veuiller d abord renseigner tous les champs';
} else {

$q = $db->prepare('SELECT * FROM articles WHERE titre = :titres ');
$q->bindValue(':titres', $titre);
$q->execute();
$f = $q->fetch(PDO::FETCH_ASSOC);

if ($q->rowCount() > 0) {
$fautes[] = 'L article existe deja'; 
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

if (!is_dir('images')) {
mkdir('images');
} 

if (empty($fautes)) {

$image = $_FILES['image'] ?? null;
$path = '';

if ($image && $image['tmp_name']) {

$path = 'images/'.randomString(8).'/'.$image['name'];
mkdir(dirname($path));

move_uploaded_file($image['tmp_name'], $path);

}

$in = $db->prepare('INSERT INTO articles (titre, descriptions, contenu, photo, dates) VALUES (:titre, :descriptions, :contenu, :photo, :dates)');
$in->bindValue(':titre', $titre);
$in->bindValue(':descriptions', $description);
$in->bindValue(':contenu', $contenu);
$in->bindValue(':photo', $path);
$in->bindValue(':dates', $date);
$in->execute();

header('Location: accueil.php');

}  
}  

?>
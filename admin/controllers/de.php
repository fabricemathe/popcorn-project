<?php
require 'dtb.php';

$id = $_POST['delete'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 if (!$id) {
    header('Location: accueil.php');
    exit;
} else {
$de = $db->prepare('DELETE FROM articles WHERE id = :id');
$de->bindValue(':id', $id);
$de->execute();

header('Location: accueil.php');    
}   
}

?>
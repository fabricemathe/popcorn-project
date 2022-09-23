<?php
require 'dtb.php';

$a = [];

@$search = htmlspecialchars(trim($_GET['url']));

if ($search == '') {
$all = $db->prepare('SELECT * FROM articles ORDER BY id DESC');
$all->execute();
$a = $all->fetchAll(PDO::FETCH_ASSOC);    
} else {
$all = $db->prepare('SELECT * FROM articles WHERE titre LIKE :search ORDER BY id DESC');
$all->bindValue(':search', "%$search%");
$all->execute();
$a = $all->fetchAll(PDO::FETCH_ASSOC);    
}

?>
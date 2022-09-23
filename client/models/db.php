<?php 
$dsn = 'mysql:host=localhost; dbname=elie-popcorn_db; charset=utf8; port=3306';
$dsu = 'root';
$dsp = '';
$db = new PDO($dsn, $dsu, $dsp);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$all = $db->prepare('SELECT * FROM articles ORDER BY id DESC');
$all->execute();
$a = $all->fetchAll(PDO::FETCH_ASSOC); 
?>
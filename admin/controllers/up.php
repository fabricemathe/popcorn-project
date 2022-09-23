<?php 
require 'dtb.php';

$idw = '';
$errs = [];
$titre = '';
$description = '';
$contenu = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$idw = $_POST['update'];

$r = $db->prepare('SELECT * FROM articles WHERE id = :id');
$r->bindValue(':id', $idw);
$r->execute();
$l = $r->fetch(PDO::FETCH_ASSOC);

$titre = $_POST['titre'];
$description = $_POST['description'];
$contenu = $_POST['contenu'];
$date = date('Y-m-d H:i:s');

if (isset($_POST['submit'])) {

if (!$titre || !$description || !$contenu) {
$errs[] = 'Veuiller renseigner tous les champs';
} else {
 
$ins = $db->prepare('UPDATE articles SET titre =:titre, descriptions = :descriptions, contenu = :contenu, dates = :dates WHERE id = :id');
$ins->bindValue(':titre', $titre);
$ins->bindValue(':descriptions', $description);
$ins->bindValue(':contenu', $contenu);
$ins->bindValue(':id', $idw);
$ins->bindValue(':dates', $date);
$ins->execute();

header('Location: accueil.php');
}
}
}

?>
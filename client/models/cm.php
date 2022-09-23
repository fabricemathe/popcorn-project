<?php
require 'db.php';

$erreurs = [];

$nom = '';
$tel = '';
$desc = '';
$ida = '';

$p = $db->prepare('SELECT id FROM articles ORDER BY id ASC');
$p->execute();
$c = $p->fetchAll(PDO::FETCH_ASSOC);

foreach ($c as $j) {
   
$q = $db->prepare('SELECT * FROM commentaires ORDER BY id DESC'); 
$q->execute();
$comments = $q->fetchAll(PDO::FETCH_ASSOC);

}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ida = $_POST["id-article"];

    $nom = htmlspecialchars(trim($_POST['nom']));
    $tel = htmlspecialchars(trim($_POST['telephone']));
    $desc = htmlspecialchars(trim($_POST['description']));
    $dates = date('Y-m-d H:i:s');


    if (!$tel || !$desc || !$nom) {

        $erreurs[] = 'Veuiller renseigner tous les champs';

    } else {

    $o = $db->prepare('INSERT INTO commentaires (id_article, noms, telephone, contenu, dates) VALUES (:ida, :nom, :telephone, :contenu, :dates)');
    $o->bindValue(':ida', $ida);
    $o->bindValue(':nom', $nom);
    $o->bindValue(':telephone', $tel);
    $o->bindValue(':contenu', $desc);
    $o->bindValue(':dates', $dates);
    $o->execute();

    header('Location: accueil.php');

    }

}

?>
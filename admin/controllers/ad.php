<?php
require 'dtb.php';

$erreurs = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nom = $_POST['nom'];
$pass = $_POST['password'];

if (!$nom || !$pass) {
$erreurs[] = 'Verifier votre nom ou password';
} else {

if (empty($erreurs)) {
$v = $db->prepare('SELECT * FROM admin WHERE nom = :nom');
$v->bindValue(':nom', $nom);
$v->execute();
$verify = $v->fetch(PDO::FETCH_ASSOC);

if ($v->rowCount() > 0) {

if ($nom == $verify['nom'] && password_verify($pass, $verify['password'])) {

header('Location: accueil.php');
die;

} else {
$erreurs[] = 'Entrez des infos correctes svp !';
die;
}

} else {
$erreurs[] = 'Entrez des infos correctes svp !';
}

} else {
$erreurs[] = 'Un probleme est survenu dans l application';
}

}
}
    
 ?>
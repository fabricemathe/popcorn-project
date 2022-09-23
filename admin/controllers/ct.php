<?php
require 'dtb.php';

$p = $db->prepare('SELECT id, titre FROM articles ORDER BY id ASC');
$p->execute();
$c = $p->fetchAll(PDO::FETCH_ASSOC);

foreach ($c as $j) {  
$q = $db->prepare('SELECT * FROM commentaires ORDER BY id DESC'); 
$q->execute();
$t = $q->fetchAll(PDO::FETCH_ASSOC);
}

$sup = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sup = $_POST['commentdelete'];

    if ($_POST['soumettre']) {
        $d = $db->prepare('DELETE FROM commentaires WHERE id = :del ');
        $d->bindValue(':del', $sup);
        $d->execute();
    }
}

?>
<?php 
require 'client/models/db.php';
require 'client/models/parts/head.php';
?>

<h3>Connexion</h3> <br>

<form action="" method="post">
    <label for="pseudo">Pseudo:</label>
<input type="text" name="pseudo" id="" required> <br>
<label for="password">Password:</label>
<input type="password" name="password" id=""> <br>
<button type="submit" name="submit">S inscrire</button> 
</form>

<p>Je n ai pas de compte, <a href="index.php">je m inscris</a></p>
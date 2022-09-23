<?php 
require 'client/models/db.php';
require 'client/models/parts/head.php';
?>

<h3>Inscription</h3> <br>

<form action="" method="post">
    <label for="pseudo">Pseudo:</label>
<input type="text" name="pseudo" id="" required> <br>
<label for="email">Email:</label>
<input type="email" name="email" id="" required> <br>
<label for="telephone">Telephone:</label>
<select name="idf" id="">
    <option value="RDC">+243</option>
</select>
<input type="number" name="telephone" id=""> <br>
<label for="password">Password:</label>
<input type="password" name="password" id=""> <br>
<button type="submit" name="submit">S inscrire</button> 
</form>

<p>J ai deja un compte, <a href="connexion.php">je me connecte</a></p>

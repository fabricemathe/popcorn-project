<?php
require 'controllers/ad.php';
require 'controllers/partials/header.php';
?>
  
<form action="" method="post">
    <?php foreach ($erreurs as $erreur): ?>
        <p><?php echo $erreur; ?></p>
    <?php endforeach; ?>
    <label for="nom">Pseudo</label>
    <input type="text" name="nom" id=""> <br>
    <label for="password">Password</label>
    <input type="password" name="password" id=""> <br>
    <button type="submit" name="submit">Soumettre</button>
</form>

</body>
</html>
<?php
require 'controllers/ca.php';
require 'controllers/partials/header.php';
?>

<h1 style="border: 3px solid black;">Admin Workspace</h1>
<a href="accueil.php"><h2>Articles</h2></a>
<h3>Creer</h3>

<form action="" method="post" enctype="multipart/form-data">
    <?php foreach ($fautes as $faute) : ?>
        <p><?php echo $faute; ?></p>
    <?php endforeach; ?>
    <label for="photo">Select Image</label>
    <input type="file" name="photo" id=""> <br>
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="" value="<?php echo $titre; ?>" required> <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="" value="<?php echo $description; ?>" required> <br>
    <label for="contenu">Contenu</label>
    <textarea name="contenu" id="" cols="30" rows="1" required><?php echo $contenu; ?></textarea> <br>
    <button type="submit" value="submit" name="submit">Publier</button>
</form>

</body>

</html>
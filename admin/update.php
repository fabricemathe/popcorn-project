<?php 
require 'controllers/up.php';
require 'controllers/partials/header.php';
?>

<h1 style="border: 3px solid black;">Admin Workspace</h1>
<h3>Creer un Article</h3>

<form action="" method="post">
<?php foreach ($errs as $err): ?>
<p><?php echo $err; ?></p>
<?php endforeach; ?>
<label for="titre">Titre</label>
<input type="text" name="titre" id="" value="<?php echo $l['titre']; ?>"> <br>
<label for="description">Description</label>
<input type="text" name="description" id="" value="<?php echo $l['descriptions']; ?>"> <br>
<label for="contenu">Contenu</label>
<textarea name="contenu" id="" cols="30" rows="1"><?php echo $l['contenu']; ?></textarea> <br>
<button type="submit" value="submit" name="submit">Publier</button>
</form>

</body>
</html>
<?php
require ('models/cm.php');
require ('models/parts/head.php');
?>

<h1>PopcornExpress</h1>
<div>

<?php foreach ($a as $i=>$f): ?>

<fieldset>
<legend><h3><?php echo $f['titre']; ?></h3></legend>
<h5><?php echo $f['descriptions']; ?></h5>
<img src="models/pics/20220616_154207.png" alt="Une image du popcorn"
style="width: 300px;">
<p><?php echo $f['contenu']; ?></p>
<small style="text-align: right;"><p>Publie le <?php echo $f['dates']; ?> par Admin</p></small>
<hr>

<form action="" method="POST">
<input type="hidden" name="id-article" value="<?php echo $f['id']; ?>">    
<p>Pour toute preoccupation concernant le produit:</p>
<label for="nom">Nom:</label>
<input type="text" name="nom" id="" placeholder="Felix Antoine"> &nbsp; &nbsp;
<label for="telephone">Tel:</label>
<select name="ids" id="">
<option value="RDC">+243</option>
</select>
<input type="number" name="telephone" id="" placeholder="987654321" required> <br>
<label for="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</label> <br>
<textarea name="description" id="" cols="65" rows="5" placeholder="Description de la question"></textarea> <br>
<?php foreach ($erreurs as $i=>$erreur): ?>
<p style="color: red;"><?php echo $erreur; ?></p>
<?php endforeach; ?>
<button type="submit" name="envoyer">Envoyer</button>
</form>

<?php if (!empty($comments)): ?>
<h3 style="text-align: justify;">Commentaires</h3>
<?php foreach ($comments as $u => $comment): ?>
<?php if ($comment['id_article'] == $f['id']): ?>
<ul>
    <li><small><b><p><?php echo $comment['noms']; ?></p></b></small> 
    <i><p><?php echo $comment['contenu']; ?></p></i>
    <small><p style="text-align: right; color:cadetblue;">Commentaire du  <?php echo $comment['dates'] ?></p></small></li>
</ul>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>

</fieldset>
<?php endforeach; ?>


</div>
</body>
</html>
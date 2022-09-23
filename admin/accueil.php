<?php
require 'controllers/ac.php';
require 'controllers/partials/header.php'
?>

<h1 style="border: 3px solid black; text-align: center;">Admin Workspace</h1>
<h2><a href="create.php">Creer un Article</a></h2> <br>
<form action="" method="">
    <input type="text" name="url" style="width: 300px; height:20px;" value="<?php echo $search; ?>">
    <button type="submit">Search</button>
</form> <br> 
<b><thead >
<tr><hr>
|<th>#</th>|
|<th>Titre</th>|
|<th>Description</th>|
|<th>Contenu</th>|
|<th>Photo</th>|
|<th>DatePublication</th>|
|<th>Actions</th>|
</tr> <br> <hr> 
</thead> <br> <br>  </b>
<tbody>
<?php foreach ($a as $i=>$ar): ?>
<tr>
<td><?php echo $i+1; ?></td> 
<td><?php echo substr($ar['titre'], 0, 10); ?></td>
<td><?php echo substr($ar['descriptions'], 0, 10); ?></td>
<td><?php echo substr($ar['contenu'], 0, 10); ?></td>
<td> <img src=<?php echo $ar['photo']; ?>> </td> 
<td><?php echo $ar['dates']; ?></td>
<td>
    <form action="update.php" method="post" style="display: inline-block;">
        <input type="hidden" name="update" value="<?php echo $ar['id']; ?>">
        <button type="submit">Update</button>
    </form>
    <form action="delete.php" method="post" style="display: inline-block;">
        <input type="hidden" name="delete" value="<?php echo $ar['id']; ?>">
        <button type="submit">Delete</button>
    </form>
    <a href="comment.php"><button>View Comments</button></a>
</td>
</tr> <br> <hr>
<?php endforeach; ?>
</tbody>

</body>
</html>
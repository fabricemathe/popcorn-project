<?php
require 'controllers/ct.php';
require 'controllers/partials/header.php'
?>

<h1 style="border: 3px solid black; text-align: center;">Admin Workspace</h1>

<?php foreach ($c as $i => $item): ?>

    <ol>
        <li><?php echo $item['titre']; ?></li>
    </ol>

    <?php if (!empty($ite)) ?>

<table>
    <thead>
        <tr>
            <th>Pseudo</th>
            <th>Telephone</th>
            <th>Contenu</th>
            <th>Date</th>
            <th>Action</th>
    </thead> <br>
    <tbody>
        <?php foreach ($t as $i=>$r): ?>
        <?php if ($item['id'] === $r['id_article']): ?>
        <tr>
            <td style="padding: 0px 30px;"><?php echo $r['noms']; ?></td>
            <td style="padding: 0px 30px;"><?php echo $r['telephone']; ?></td>
            <td style="padding: 0px 30px;"><?php echo $r['contenu']; ?></td>
            <td style="padding: 0px 30px;"><?php echo $r['dates']; ?></td>
            <td style="padding: 0px 30px;">
                <form action="" method="POST">
                    <input type="hidden" name="commentdelete" value="<?php echo $r['id_article']; ?>">
                    <button type="submit" name="soumettre">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?> <br>
        </tbody>

</table>  
<?php endforeach; ?>




</body>
</html>
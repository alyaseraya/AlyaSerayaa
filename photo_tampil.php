<?php

$photo = new App\Photo();

$rows = $photo->tampil();

?>

<h2> Data Photo Blog </h2>

<p>
    <a href="index.php?page=photo_input"><input type="submit" class="tombol" value="Input Data"></a>  
</p>

<table class="tabel1">
    <tr>
        <th>ID</th>
        <th>Tanggal</th>
        <th>Title</th>
        <th>Keterangan</th>
        <th>ID Photo</th>
        <th>Edit</th>
    </tr>
    <?php foreach ($rows as$row) { ?>
    <tr>
        <td> <?php echo $row ['id_photo']; ?> </td>
        <td> <?php echo $row ['tangggal']; ?> </td>
        <td> <?php echo $row ['title']; ?> </td>
        <td> <?php echo $row ['keterangan']; ?> </td>
        <td> <?php echo $row ['id_post']; ?> - <?php echo $row ['title']; ?> </td>
        <td><a href="index.php?page=photo_edit&id=<?php echo $row['id_photo']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>
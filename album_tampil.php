<?php

$album = new App\Album();

$rows = $album->tampil();

?>

<h2> Data Album Blog </h2>

<p>
    <a href="index.php?page=album_input"><input type="submit" class="tombol" value="Input Data"></a>  
</p>

<table class="tabel1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Keterangan</th>
        <th>ID Photo</th>
        <th>Edit</th>
    </tr>
    <?php foreach ($rows as$row) { ?>
    <tr>
        <td> <?php echo $row ['id_album']; ?> </td>
        <td> <?php echo $row ['nama']; ?> </td>
        <td> <?php echo $row ['keterangan']; ?> </td>
        <td> <?php echo $row ['id_photo']; ?> - <?php echo $row ['title']; ?> </td>
        <td><a href="index.php?page=album_edit&id=<?php echo $row['id_album']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>
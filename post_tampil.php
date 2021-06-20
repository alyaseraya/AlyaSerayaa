<?php

$post = new App\Post();

$rows = $post->tampil();

?>

<h2> Data Post Blog </h2>

<p>
    <a href="index.php?page=post_input"><input type="submit" class="tombol" value="Input Data"></a>  
</p>

<table class="tabel1">
    <tr>
        <th>ID</th>
        <th>Tanggal</th>
        <th>Slug</th>
        <th>Title</th>
        <th>Keterangan</th>
        <th>ID Kategori</th>
        <th>Edit</th>
    </tr>
    <?php foreach ($rows as$row) { ?>
    <tr>
        <td> <?php echo $row ['id_post']; ?> </td>
        <td> <?php echo $row ['tangggal']; ?> </td>
        <td> <?php echo $row ['slug']; ?> </td>
        <td> <?php echo $row ['title']; ?> </td>
        <td> <?php echo $row ['keterangan']; ?> </td>
        <td> <?php echo $row ['id_kategori']; ?> - <?php echo $row ['nama']; ?> </td>
        <td><a href="index.php?page=post_edit&id=<?php echo $row['id_post']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>
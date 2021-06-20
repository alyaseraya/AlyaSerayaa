<?php

$kategori = new App\Kategori();

$rows = $kategori->tampil();

?>

<h2> Data Kategori Blog </h2>

<p>
        <a href="index.php?page=kategori_input"><input type="submit" class="tombol" value="Input Data"></a>  
</p>

<table class="tabel1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Keterangan</th>
        <th>Edit</th>
    </tr>
    <?php foreach ($rows as$row) { ?>
    <tr>
        <td> <?php echo $row ['id_kategori']; ?> </td>
        <td> <?php echo $row ['nama']; ?> </td>
        <td> <?php echo $row ['keterangan']; ?> </td>
        <td><a href="index.php?page=kategori_edit&id=<?php echo $row['id_kategori']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>
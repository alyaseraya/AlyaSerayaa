<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Akademik">
    <meta name="author" content="Suendri">
    <meta name="keyword" content="sistem, informasi, akademik, siakad, uinsu">
    <title>Sistem Informasi Akademik UIN Sumatera Utara Medan</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
    <header>
    <img src="<?php echo ASSET;?>images/image.jpeg" alt="[IMG]">

        <p class="jumbotron">  </p>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"class="active">Dashboard</a> 
            </li>
            <li>
                <a href="index.php?page=album_tampil">Album</a> 
            </li>
            <li>
                <a href="index.php?page=kategori_tampil">Kategori</a> 
            </li>  
            <li>
                <a href="index.php?page=photo_tampil">Photo</a> 
            </li>
            <li>
                <a href="index.php?page=post_tampil">Post</a> 
            </li>     
            <li>
                <a href="logout.php">Logout</a> 
            </li> 
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_dashboard.php ";
        }
        ?>
    </section>
    <footer>
        Copyright &copy; 2021
    </footer>
    </main>
</body>
</html>
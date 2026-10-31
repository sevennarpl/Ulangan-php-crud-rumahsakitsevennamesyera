
<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'pasien';

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rumah Sakit Ahmadi</title>
</head>
<body>
    <h2>Aplikasi Rumah Sakit sevenna mesyera</h2>

    <a href="index.php?page=pasien">Data pasien</a> |
    <a href="index.php?page=kunjungan">Data Kunjungan</a>

    <hr>

    <?php
    switch ($page) {
        case 'pasien':
            include 'views/Pasien/index.php';
            break;

        case 'createpasien':
            include 'views/Pasien/create.php';
            break;

        case 'editpasien':
            include 'views/Pasien/edit.php';
            break;

        case 'showpasien':
            include 'views/Pasien/show.php';
            break;

        case 'kunjungan':
            include 'views/Kunjungan/index.php';
            break;

        case 'createkunjungan':
            include 'views/Kunjungan/create.php';
            break;

        case 'editkunjungan':
            include 'views/Kunjungan/edit.php';
            break;

        case 'showkunjungan':
            include 'views/Kunjungan/show.php';
            break;

        default:
            echo "Halaman tidak ditemukan.";
            break;
    }
    ?>

</body>
</html>

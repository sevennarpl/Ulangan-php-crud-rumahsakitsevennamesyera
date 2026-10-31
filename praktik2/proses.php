
<?php
require_once __DIR__ . "/koneksi.php";

$proses = isset($_GET['proses']) ? $_GET['proses'] : '';

if ($proses == 'insert') {
    $namapasien = $_POST['namapasien'] ?? '';
    $jeniskelamin = $_POST['jeniskelamin'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $nohp = $_POST['nohp'] ?? '';

    $query = mysqli_prepare(
        $koneksi,
        "INSERT INTO pasien (namapasien, jeniskelamin, alamat, nohp)
         VALUES (?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $query,
        "ssss",
        $namapasien,
        $jeniskelamin,
        $alamat,
        $nohp
    );

    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);

} elseif ($proses == 'update') {
    $id = $_POST['idpasien'] ?? '';
    $namapasien = $_POST['namapasien'] ?? '';
    $jeniskelamin = $_POST['jeniskelamin'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $nohp = $_POST['nohp'] ?? '';

    $query = mysqli_prepare(
        $koneksi,
        "UPDATE pasien
         SET namapasien = ?, jeniskelamin = ?, alamat = ?, nohp = ?
         WHERE idpasien = ?"
    );

    mysqli_stmt_bind_param(
        $query,
        "sssss",
        $namapasien,
        $jeniskelamin,
        $alamat,
        $nohp,
        $id
    );

    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);

} elseif ($proses == 'hapus') {
    $id = $_POST['idpasien'] ?? '';

    $query = mysqli_prepare(
        $koneksi,
        "DELETE FROM pasien WHERE idpasien = ?"
    );

    mysqli_stmt_bind_param($query, "s", $id);
    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
}

header("Location: index.php");
exit;
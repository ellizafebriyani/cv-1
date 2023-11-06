<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];

    // Lakukan validasi atau penyimpanan ke database sesuai kebutuhan
    // Misalnya, menyimpan ke database MySQL

    echo 'Komentar berhasil disimpan';
} else {
    echo 'Metode tidak diizinkan';
}
?>

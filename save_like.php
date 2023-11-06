<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lakukan penyimpanan data "like" ke database atau logika lainnya sesuai kebutuhan

    echo 'Like berhasil disimpan';
} else {
    echo 'Metode tidak diizinkan';
}
?>

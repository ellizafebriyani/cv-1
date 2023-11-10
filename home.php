<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <title>HOME</title>
</head>


<body style="background: #B0C4DE">
<nav class="navbar sticky-top bg-body-tertiary">
    <div class="container-fluid">
    <div class="d-flex justify-content-center align-items-center vh-100">
    <font color="000000"><h1><center>SELAMAT DATANG DALAM WEBSITE CURRICULUM VITAE</h1></font></center>
</body>
<body class="p-3">
<nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1><a class="navbar-brand" href="#profil"><font color="000000">INGIN MEMBUAT CV SECARA MUDAH? DAFTARKAN DIRI ANDA SEKARANG</h1></a></font>
            <br><a href="signup.php" button type="submit" class="btn btn-primary">SIGN UP</button></br>
            <h1><font color="	#007BFF"></h1></a></font>

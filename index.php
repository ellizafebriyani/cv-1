<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data");
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <title>Curriculum Vitae</title>
</head>

<body class="p-3">
  <!-- <div class="container mt-5"> -->
    <nav class="navbar sticky-top bg-body-tertiary biru">
      <div class="container-fluid">
        <h1>Curriculum Vitae</h1>
        <a class="navbar-brand" href="admin.php">Update</a>
      </div>
    </nav>
    <div class="card">
      <div class="p-3">
        <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil">
        <div class="card-body">
          <h1 class="card-title"><?php echo $data['nama']; ?></h1>
          <p class="card-text"><?php echo $data['alamat']; ?></p>
          <p class="card-text"><?php echo $data['telepon']; ?></p>
          <p class="card-text"><?php echo $data['email']; ?></p>
          <p class="card-text"><?php echo $data['web']; ?></p>
          <h2>Pendidikan</h2>
          <p class="card-text"><?php echo $data['pendidikan']; ?></p>
          <h2>Pengalaman Kerja</h2>
          <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
          <h2>Keterampilan</h2>
          <p class="card-text"><?php echo $data['keterampilan']; ?></p>
          
          <!-- <h2>Komentar</h2> -->
          <!-- <div id="comments"> -->
            <!-- Komentar-komentar akan ditampilkan di sini -->
          <!-- </div> -->
          <!-- <label for="commentInput" class="form-label">Tambahkan Komentar</label> -->
          <!-- <textarea class="form-control" id="commentInput" name="keterampilan" rows="3" placeholder="Tambahkan komentar..."></textarea> -->
          <!-- <button class="btn btn-primary" onclick="addComment()">Tambah Komentar</button> -->
          <!-- <button class="btn btn-warning" onclick="likeCV()">Like</button> -->

        </div>
      </div>
    </div>
  <!-- </div> -->

  <script src="script.js"></script>
</body>

</html>
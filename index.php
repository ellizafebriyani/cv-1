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
  <title>Curriculum Vitae</title>
</head>


<body style="background: #B0C4DE">
<nav class="navbar sticky-top bg-body-tertiary">
    <div class="container-fluid">
    <font color="0000000"><h1>CURRICULUM VITAE</h1></font>
</div>
</nav>
</body>

<body class="p-3">
<nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1><a class="navbar-brand" href="#profil"><font color="000000">PROFIL</h1></a></font>
      <h1><a class="navbar-brand" href="#pendidikan"><font color="000000">PENDIDIKAN</h1></a></font>
      <h1><a class="navbar-brand" href="#pengalaman"><font color="000000">PENGALAMAN</h1></a></font>
      <h1><a class="navbar-brand" href="#keterampilan"><font color="000000">KETERAMPILAN</h1></a></font>
      <h1><a class="navbar-brand" href="login.php"><font color="000000">UPDATE</h1></a></font>
      <h1><a class="navbar-brand" href="login.php"><font color="000000">LOGIN</h1></a></font>
      <h1><a class="navbar-brand" href="#comments"><font color="000000">KOMENTAR</h1></a></font>
      <h1><a class="navbar-brand" href="home.php"><font color="000000">HOMEPAGE</h1></a></font>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil">
      <div class="card-body">
      <h2>PROFIL</h2>
        <h1 class="card-title"><?php echo $data['nama']; ?></h1><p id="profil"></p><a href=""></a>
        <p class="card-text"><?php echo $data['alamat']; ?></p><p id="profil"></p><a href=""></a>
        <p class="card-text"><?php echo $data['telepon']; ?></p><p id="profil"></p><a href=""></a>
        <p class="card-text"><?php echo $data['email']; ?></p><p id="profil"></p><a href=""></a>
        <p class="card-text"><?php echo $data['web']; ?></p><p id="profil"></p><a href=""></a>
        <h3>PENDIDIKAN</h3>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p><p id="pendidikan"></p><a href=""></a>
        <h3>PENGALAMAN KERJA</h3>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p><p id="pengalaman"></p><a href=""></a>
        <h3>KETERAMPILAN</h3>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p><p id="keterampilan"></p><a href=""></a>
      </div>
    </div>
  </div>
  <!-- Tampilkan komentar -->
  <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h3>KOMENTAR</h3>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <div id="comments">
        <?php
        include 'config.php';

        $cvId = 1; 
        $query = "SELECT * FROM comments WHERE cv_id = $cvId";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
          while ($comment = mysqli_fetch_assoc($result)) {
            echo '<div class="comment">' . $comment['comment_text'] . '</div>';
          }
        } else {
          echo 'Belum ada komentar';
        }

        mysqli_close($conn);
        ?>
      </div>
      <br><label for="commentInput" class="form-label">TAMBAHKAN KOMENTAR DI BAWAH!</label></br>
      <textarea class="form-control" id="commentInput" name="comment" rows="3" placeholder="Tambahkan komentar..."></textarea>
      <button class="btn btn-primary" onclick="addComment()">Tambah Komentar</button>
    </div>
  </div>

</body>

</html>
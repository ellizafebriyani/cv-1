<?php
$host = 'localhost';
$db = 'if22';
$user = 'elliza';
$pwd = 'el88';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}

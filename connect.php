<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_cucisepatu";

$mysqli = mysqli_connect($servername, $username, $password, $database);


if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

// if (isset($_POST['submit'])) {
//     if (!empty($_POST['nama']) && !empty($_POST['noHP']) && !empty($_POST['email']) && !empty($_POST['alamat']) && !empty($_POST['paket'])) {
//         $nama = $_POST['nama'];
//         $noHP = $_POST['noHP'];
//         $email = $_POST['email'];
//         $alamat = $_POST['alamat'];
//         $paket = $_POST['paket'];

//         $query = "INSERT INTO form_pemesanan(nama,noHp,email,alamat,paket) VALUES('$nama','$noHP','$email','$alamat','$paket')";

//         $run = mysqli_query($mysqli, $query);

//         //     if ($run) {
//         //         echo "<script>alert('Pemesanan Berhasil. Mohon tunggu driver kami!');window.location='project1.php'</script>";
//         //     }
//         // } else {
//         //     echo "<script>alert('Mohon mengisi data dengan lengkap');window.location='project1.php'</script>";
//         //     die();
//     }
// }

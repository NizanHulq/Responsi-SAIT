<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

// server lokal
include_once "connect.php";
// if (isset($_POST['submit'])) {
//     if (!empty($_POST['nama']) && !empty($_POST['no_hp']) && !empty($_POST['email']) && !empty($_POST['kelas'])) {
//         $nama = $_POST['nama'];
//         $no_hp = $_POST['no_hp'];
//         $email = $_POST['email'];
//         $kelas = $_POST['kelas'];

//         $query = "INSERT INTO siswa(nama, no_hp, email, kelas) values('$nama', '$no_hp', '$email', '$kelas')";
//         if (mysqli_query($conn, $query)) {
//             echo "<script>alert('Data Telah Terkirim');window.location='index.php'</script>";
//         }
//     } else {
//         echo "<script>alert('semua kolom wajib diisi');window.location='index.php'</script>";
//         die();
//     }
// }

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "data_cucisepatu";

// $mysqli = mysqli_connect($servername, $username, $password, $database);


// if (!$mysqli) {
//     die("Connection failed: " . mysqli_connect_error());
// }

if (isset($_POST['submit'])) {
    if (!empty($_POST['nama']) && !empty($_POST['noHp']) && !empty($_POST['email']) && !empty($_POST['alamat']) && !empty($_POST['paket'])) {
        $nama = $_POST['nama'];
        $noHp = $_POST['noHp'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $paket = $_POST['paket'];

        $query = "INSERT INTO form_pemesanan(nama,noHp,email,alamat,paket) VALUES('$nama','$noHp','$email','$alamat','$paket')";

        $run = mysqli_query($mysqli, $query);
    }
}

//server ubuntu

$nama = $_POST['nama'];
$noHp = $_POST['noHp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$paket = $_POST['paket'];



$client = new Client();

$response = $client->request(
    'POST',
    'http://192.168.56.10/sepatWash/api_cucisepatu.php',
    [
        'form_params' => [
            'nama' => $nama,
            'noHp' => $noHp,
            'email' => $email,
            'alamat' => $alamat,
            'paket' => $paket,
        ]
    ]
);

if ($response->getStatusCode()) {
    header("location:project1.php");
} else {
    echo "Failed";
}

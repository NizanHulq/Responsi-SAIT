<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$nama = $_POST['nama'];
$noHp = $_POST['noHp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$paket = $_POST['paket'];


$client = new Client();

$response = $client->request(
    'POST',
    'http://192.168.56.10/sepatWash/api_cucisepatu.php?id=' . $_GET['id'],
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

<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'DELETE',
    'http://192.168.56.10/sepatWash/api_cucisepatu.php?id=' . $_GET['id']
);

if ($response->getStatusCode()) {
    header("location:project1.php");
} else {
    echo "Failed";
}

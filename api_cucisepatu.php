<?php

// make api call to get data from database  and return it as json   in this case, we are using mysql database   but you can use any database you want   just make sure you have the correct code for that database  and make sure you have the correct table name   and make sure you have the correct column name   and make sure you have the correct data type for that column       and make sure you have the correct data type for that column
// require_once "connect.php";
// $request_method=$_SERVER["REQUEST_METHOD"];

// if ($request_method=="GET") {
//     if(!empty($_GET["id"])){
//         $id=intval($_GET["id"]);
//         get_pemesanan($id);
//     }else{
//         get_mhss();
//     }



require_once "connect.php";
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        if (!empty($_GET["id"])) {
            $id = intval($_GET["id"]);
            get_pemesanan_id($id);
        } else {
            get_pemesanan();
        }
        break;
    case 'POST':
        if (!empty($_GET["id"])) {
            $id = intval($_GET["id"]);
            update_pemesanan($id);
        } else {
            insert_pemesanan();
        }
        break;
    case 'DELETE':
        $id = intval($_GET["id"]);
        delete_pemesanan($id);
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
        break;
}

function get_pemesanan()
{
    global $mysqli;
    $query = "SELECT * FROM form_pemesanan";
    $data = array();
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }
    $response = array(
        'status' => 1,
        'message' => 'Get List Mahasiswa Successfully.',
        'data' => $data
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}

function get_pemesanan_id()
{
    global $mysqli;
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
    }
    $query = "SELECT * FROM form_pemesanan WHERE id= $id";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }
    if ($data) {
        $response = array(
            'status' => 1,
            'message' => 'Success',
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'message' => 'No Data Found'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
function insert_pemesanan()
{
    global $mysqli;
    $check = array('nama' => '', 'noHp' => '', 'email' => '', 'alamat' => '', 'paket' => '');
    $check_match = count(array_intersect_key($_POST, $check));
    if ($check_match == count($check)) {

        $result = mysqli_query($mysqli, "INSERT INTO form_pemesanan SET
      
               nama = '$_POST[nama]',
               noHp = '$_POST[noHp]',
               email = '$_POST[email]',
               alamat = '$_POST[alamat]',
               paket = '$_POST[paket]'");

        if ($result) {
            $response = array(
                'status' => 1,
                'message' => 'Insert Success'
            );
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Insert Failed.'
            );
        }
    } else {
        $response = array(
            'status' => 0,
            'message' => 'Wrong Parameter'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}
function update_pemesanan()
{
    global $mysqli;
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
    }
    $check = array('nama' => '', 'noHp' => '', 'email' => '', 'alamat' => '', 'paket' => '');
    $check_match = count(array_intersect_key($_POST, $check));
    if ($check_match == count($check)) {

        $result = mysqli_query($mysqli, "UPDATE form_pemesanan SET               
               nama = '$_POST[nama]',
               noHp = '$_POST[noHp]',
               email = '$_POST[email]',
               alamat = '$_POST[alamat]',
               paket = '$_POST[paket]' WHERE id = $id");

        if ($result) {
            $response = array(
                'status' => 1,
                'message' => 'Update Success'
            );
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Update Failed'
            );
        }
    } else {
        $response = array(
            'status' => 0,
            'message' => 'Wrong Parameter',
            'data' => $id
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}
function delete_pemesanan()
{
    global $mysqli;
    $id = $_GET['id'];
    $query = "DELETE FROM form_pemesanan WHERE id=" . $id;
    if (mysqli_query($mysqli, $query)) {
        $response = array(
            'status' => 1,
            'message' => 'Delete Success'
        );
    } else {
        $response = array(
            'status' => 0,
            'message' => 'Delete Fail.'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
    
}

<?php
include '../config/functions.php';

$nama_dept  = $_POST['nama_dept'];
$nama_tabel     = "tbl_dept";
header('Content-Type: text/xml');

$hasil = $db->query("INSERT INTO $nama_tabel VALUES(NULL, '$nama_dept') ");

if($hasil){
    $response['success'] = 1;
    $response['message'] = "Berhasil Disimpan";
    echo json_encode($response);
}
else{
    $response['success'] = 0;
    $response['message'] = "Data Gagal Disimpan";
    echo json_encode($response);
}
?>
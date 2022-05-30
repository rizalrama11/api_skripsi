<?php
include '../config/functions.php';

$id_dept = $POST['id_dept'];
$nik_opt = $POST['nik_opt'];
$nama_opt  = $_POST['nama_opt'];
$nama_tabel     = "tabel_operator";
header('Content-Type: text/xml');

$hasil = $db->query("INSERT INTO $nama_tabel VALUES(NULL, '$id_dept', '$nik_opt', '$nama_opt') ");

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
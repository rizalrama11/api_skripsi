<?php
include '../config/functions.php';

$id_history = $_POST['id_history'];
$tanggal    = $_POST['tanggal'];
$id_opt     = $_POST['id_opt'];
$id_dept    = $_POST['id_dept'];
$total      = $_POST['total'];
$namatabel  =['tbl_history'];
header('Content-Type: text/html');

$hasil = $db->query("INSERT INTO $namatabel VALUES(NULL, '$id_history',NOW() ,'$id_opt','$id_dept','$total'");

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
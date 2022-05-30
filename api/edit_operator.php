<?php
include '../config/functions.php';

$id_opt  = $_POST['id_opt'];
$id_dept = $_POST['id_dept']
$nik_opt = $_POST['nik_opt'];
$nama_opt  = $_POST['nama_opt'];

$namaTabel    = "tbl_operator";
header('Content-Type: text/xml');

$hasil = $db->query("UPDATE $namaTabel SET id_dept='$id_dept' nik_opt='$nik_opt' nama_opt='$nama_opt' WHERE
id_opt = '$id_opt' ");
if($hasil) {
  $response['success'] = 1;
  $response['message'] = "Berhasil di update";
  echo json_encode($response);
} else {
  $response['success'] = 0;
  $response['message'] = "Data gagal di update";
  echo json_encode($response);
}
?>
<?php
include '../config/functions.php';

$id_dept  = $_POST['id_dept'];
$nama_dept  = $_POST['nama_dept'];

$namaTabel    = "tbl_dept";
header('Content-Type: text/xml');

$hasil = $db->query("UPDATE $namaTabel SET nama_dept='$nama_dept' WHERE
id_dept = '$id_dept' ");
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
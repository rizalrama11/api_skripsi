<?php

//import file
include '../config/functions.php';
header('content-Type: application/json');

$response = array();
// $userid = $_GET['userid'];
$sql = mysqli_query($con, "SELECT a.id_history, a.tanggal, b.nama_opt, c.nama_dept, a.total FROM tbl_history a 
                          LEFT JOIN tbl_operator b on a.id_opt = b.id_opt 
                          LEFT JOIN tbl_dept c on a.id_dept = c.id_dept 
                          WHERE a.id_history");
$baris = 1;
while ($a = mysqli_fetch_array($sql)) {
  // $key['id_history'] = $a['id_history'];

  $key['baris'] = strval($baris);
  $key['tanggal'] = $a['tanggal'];
  $key['nama_opt'] = $a['nama_opt'];
  $key['nama_dept'] = $a['nama_dept'];
  $key['total'] = $a['total'];
  // $key['detail'] = array();

  // $cek = mysqli_query($con, "SELECT a.*, b.nama_barang, b.image FROM flutter_penjualan_detail a LEFT JOIN flutter_barang b on a.id_barang = b.id_barang WHERE a.id_faktur = '$id_faktur'");
  // while ($b = mysqli_fetch_array($cek)){
  //     $key['detail'][] = array(
  //         "id" => $b['id'],
  //         "id_faktur" => $a['id_faktur'],
  //         "id_barang" => $b['id_barang'],
  //         "nama_barang" => $b['nama_barang'],
  //         "image" => $b['image'],
  //         "qty" => $b['qty'],
  //         "harga" => $b['harga'],
  //     );
  // }

  array_push($response, $key);
  $baris++;
}
echo json_encode($response);

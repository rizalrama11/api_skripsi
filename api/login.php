<?php
include '../config/functions.php';

$username = $_POST['username'];
$password = $_POST['password'];
$namaTabel = "tbl_user";
header('Content-Type: text/xml');
$rows = $db->get_results("SELECT * FROM $namaTabel 
                WHERE username = '$username'  AND password = '$password'");

$jumrec = $db->get_results("SELECT COUNT(*) FROM $namaTabel 
                WHERE username = '$username' AND password = '$password'");

if ($jumrec > 0) {
  $response = array();
  foreach ($rows as $row) {
    $response['id_user'] = $row->userid;
    $response['username'] = $row->username;
    $response['nama'] = $row->nama;
  }
  $response['success'] = 1;
  $response['message'] = "Berhasil Login";
  // $response['nama'] = $row->nama;
  echo json_encode($response);
  // var_dump($response);
} else {
  $response['success'] = 0;
  $response['message'] = "Tidak ada Data " . $jumrec;
  echo json_encode($response);
  // var_dump($response);
}

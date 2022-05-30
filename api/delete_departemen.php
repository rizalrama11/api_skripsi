<?php
include '../config/functions.php';

$id_dept = $_POST['id_dept'];

$namaTabel = "tbl_dept";
header("Content-Type: text/xml");

$hasil = $db->query("DELETE FROM $namaTabel WHERE id_dept = $id_dept");
if($hasil) {
    $response['success'] = 1;
    $response['message'] = "Berhasil Hapus Data";
    echo json_encode($response);
} else {
    $response['success'] = 0;
    $response['message'] = "Data Gagal Dihapus";
    echo json_encode($response);
}

?>
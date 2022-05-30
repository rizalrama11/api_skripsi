<?php
    //import file
    include '../config/functions.php';
    //query sql
    $rssql ="SELECT * FROM tbl_operator";
    //dapatkan hasil
    $sql = mysqli_query($con, $rssql);
    //deklarasi array
    $response = array();
    $nomor = 1;

    while($a = mysqli_fetch_array($sql))
    {
        $b['nomor'] = strval($nomor);
        $b['id_opt'] = $a['id_opt'];
        $b['id_dept'] = $a['id_dept'];
        $b['nik_opt'] = $a['nik_opt'];
        $b['nama_opt'] = $a['nama_opt'];
        array_push($response, $b);
        $nomor++;
    }

    echo json_encode($response);
    ?>
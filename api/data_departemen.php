<?php
    //import file
    include '../config/functions.php';
    //query sql
    $rssql ="SELECT * FROM tbl_dept";
    //dapatkan hasil
    $sql = mysqli_query($con, $rssql);
    //deklarasi array
    $response = array();
    $nomor = 1;

    while($a = mysqli_fetch_array($sql))
    {
        $b['nomor'] = strval($nomor);
        $b['id_dept'] = $a['id_dept'];
        $b['nama_dept'] = $a['nama_dept'];
        array_push($response, $b);
        $nomor++;
    }

    echo json_encode($response);
    ?>
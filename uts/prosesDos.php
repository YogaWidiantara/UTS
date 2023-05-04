<?php

$nim = $_POST['nimd'];
$nama_mhs = $_POST['namad'];
$jurusan = $_POST['panitia'];
$gender = $_POST['kel'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

include "koneksi.php";

$qry ="INSERT INTO mahasiswa VALUES (
    '$nimd', '$nama_mhsd','$panitia','$kel','$no_hpd','$emaild')";


    $exec = mysqli_query($con, $qry) or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'form.php';</script>";

    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }
?>
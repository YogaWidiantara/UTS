<?php

$nim = $_POST['nimb'];
$nama_mhs = $_POST['namab'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['buku'];

$no_hp = $_POST['no_hpb'];
$email = $_POST['emailb'];

include "koneksi.php";

$qry ="INSERT INTO mahasiswa VALUES (
    '$nim', '$nama_mhs','$jurusan','$gender','$alamat','$no_hp','$email')";


    $exec = mysqli_query($con, $qry) or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'form.php';</script>";

    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }
?>
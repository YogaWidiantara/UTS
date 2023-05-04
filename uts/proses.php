<?php

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['Gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

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
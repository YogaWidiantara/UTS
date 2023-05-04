<?php
$nim = $_GET['nimd'];

$qry = "DELETE FROM mahasiswa WHERE nim = '$nimd'";
include"koneksiDos.php";
$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>window.alert('Data berhasil dihapus'); 
    window.location = 'form.php';</script>";

}else{
    echo "<script>window.alert('Data gagal dihapus');</script>";
    var_dump($exec);
}
?>
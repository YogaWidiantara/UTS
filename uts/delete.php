<?php
$nim = $_GET['nim'];

$qry = "DELETE FROM mahasiswa WHERE nim = '$nim'";
include"koneksi.php";
$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>window.alert('Data berhasil dihapus'); 
    window.location = 'form.php';</script>";

}else{
    echo "<script>window.alert('Data gagal dihapus');</script>";
    var_dump($exec);
}
?>
<?php
require_once "koneksi.php";
$cekNim = $_GET['nim'];
if(empty($cekNim)){
    header('location:index.php');
}
$nim = (int)$cekNim;
$sql = "delete from mahasiswa where nim=$nim";
$query = mysqli_query($koneksi, $sql);  
if($query == TRUE)
{
    header('location:index.php');
}
?>

<?php
require_once "koneksi.php";
$cekNim = $_GET['nim'];
if(empty($cekNim)){
    header('location:index.php');
}
$query = mysqli_query($koneksi, "select * from mahasiswa where nim=$cekNim");
$row = mysqli_fetch_array($query);
?>

<h1>Edit</h1>
<form method="post">
    <table>
        <tr>
            <td><label>Nama lengkap</label></td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?=$row['nama_lengkap']?>"></td>
        </tr>
        <tr>
            <td><label>Kota</label></td>
            <td>:</td>
            <td><input type="text" name="kota" value="<?=$row['kota']?>"></td>
        </tr>
        <tr>
            <td><label>TTL</label></td>
            <td>:</td>
            <td><input type="date" name="ttl" value="<?=$row['ttl']?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Perbarui data" name="submit"></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['submit'])){
    $nim = (int)$cekNim;
    $nama_lengkap = $_POST['nama'];
    $kota = $_POST['kota'];
    $ttl = $_POST['ttl'];

    $sql = "update mahasiswa set nama_lengkap='$nama_lengkap', kota='$kota', ttl='$ttl' where nim=$nim";
    $query = mysqli_query($koneksi, $sql);  
    if($query == TRUE)
    {
        header('location:index.php');
    }
}
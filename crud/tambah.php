<?php
require_once "koneksi.php";
?>
<h1>Tambah Mahasiswa</h1>
<form method="post">
    <table>
        <tr>
            <td><label>NIM</label></td>
            <td>:</td>
            <td><input type="number" name="nim"></td>
        </tr>
        <tr>
            <td><label>Nama lengkap</label></td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td><label>Kota</label></td>
            <td>:</td>
            <td><input type="text" name="kota"></td>
        </tr>
        <tr>
            <td><label>TTL</label></td>
            <td>:</td>
            <td><input type="date" name="ttl"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Tambah data" name="submit"></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['submit'])){
    $nim = (int)$_POST['nim'];
    $nama_lengkap = $_POST['nama'];
    $kota = $_POST['kota'];
    $ttl = $_POST['ttl'];

    $sql = "insert into mahasiswa values($nim,'$nama_lengkap','$kota','$ttl')";    
    $query = mysqli_query($koneksi, $sql);  
    if($query == TRUE)
    {
        header('location:index.php');
    }
}
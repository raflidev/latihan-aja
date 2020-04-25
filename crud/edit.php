<?php
require_once "koneksi.php";
$cekNim = $_GET['nim'];
if(empty($cekNim)){
    header('location:index.php');
}
$query = mysqli_query($koneksi, "select * from mahasiswa where nim=$cekNim");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/f52e226df8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Daftar Mahasiswa - LatihanAja</title>
    </head>
    <body>
    <div class="container mt-2">
    <a class="badge badge-primary mb-2" href="index.php"> < Kembali</a>
    <h1>Edit</h1>
    <form method="post">
    <div class="row">
        <div class="col-5">
            <div class="form-group">
                <label>Nama lengkap</label>
                <input type="text" class="form-control" value="<?=$row['nama_lengkap']?>" name="nama">
            </div>
            <div class="form-group">
                <label>Kota</label>
                <input type="text" class="form-control" value="<?=$row['kota']?>" name="kota">
            </div>
            <div class="form-group">
                <label>TTL</label>
                <input type="date" class="form-control" value="<?=$row['ttl']?>" name="ttl">
            </div>
            <input type="submit" value="Perbarui data" class="btn btn-primary form-control" name="submit">
        </div>
    </div>
    </form>
    </div>
    </body>
    <script src="assets/js/bootstrap.min.js"></script>
</html>
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
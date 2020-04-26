<?php
require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/f52e226df8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Tambah Mahasiswa - LatihanAja</title>
    </head>
    <body>
    <div class="container mt-2">
    <h1>
    <a class="btn btn-secondary mb-2" href="index.php">
        <i class="fas fa-arrow-left"></i>
    </a>
    Tambah Mahasiswa
    </h1>
    <form method="post">
    <div class="row">
        <div class="col-lg-5">
            <div class="form-group">
                <label>NIM</label>
                <input type="number" class="form-control" name="nim">
            </div>
            <div class="form-group">
                <label>Nama lengkap</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label>Kota</label>
                <input type="text" class="form-control" name="kota">
            </div>
            <div class="form-group">
                <label>TTL</label>
                <input type="date" class="form-control" name="ttl">
            </div>
            <input type="submit" value="Tambah data" class="btn btn-primary form-control" name="submit">
        </div>
    </div>
    </form>
    </div>
    </body>
    <script src="assets/js/bootstrap.min.js"></script>
</html>
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
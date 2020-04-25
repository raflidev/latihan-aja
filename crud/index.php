<?php
include_once "koneksi.php";

$query = mysqli_query($koneksi,"select * from mahasiswa");
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
        <h1>Daftar Mahasiswa</h1>
        <a class="btn btn-primary" href="tambah.php">
        <i class="fas fa-plus-square"> </i> Tambah Mahasiswa
        </a>
        <br><br>
            <table class="table table-striped">
                <tr>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Kota</th>
                    <th>TTL</th>
                    <th>Aksi</th>
                </tr>

            <?php
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nama_lengkap'] ?></td>
                    <td><?= $row['kota'] ?></td>
                    <td><?= $row['ttl'] ?></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="edit.php?nim=<?=$row['nim']?>">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="hapus.php?nim=<?=$row['nim']?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </table>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</html>
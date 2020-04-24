<?php
include_once "koneksi.php";

$query = mysqli_query($koneksi,"select * from mahasiswa");
?>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Mahasiswa</a>
<br><br>
<table border=1>
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
            <a href="edit.php?nim=<?=$row['nim']?>">Edit</a>
            <a href="hapus.php?nim=<?=$row['nim']?>">hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>
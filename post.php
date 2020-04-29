<form method="post">
    <label>Nama</label>
    <input type="text" name="nama">
    <input type="submit" value="Submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    echo "Nama anda ".$_POST['nama'];
}
?>

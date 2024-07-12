<?php

$NIDN = $_POST['NIDN'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$jenjang = $_POST['jenjang'];




include("../koneksi.php");


$sql = "INSERT INTO dosen (nidn, nama, tempat_tanggal_lahir,tanggal_lahir,jenjang) VALUES ('$NIDN', '$nama', '$tempat','$tanggal','$jenjang')";


$tambah_data = mysqli_query($koneksi,$sql)

?>
<script>
    document.location="index.php";
</script>
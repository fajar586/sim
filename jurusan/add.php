<?php

$kode = $_POST['kode'];
$jurusan = $_POST['nama'];
$kpd = $_POST['kaprodi'];




include("../koneksi.php");


$sql = "INSERT INTO jurusan (kode, nama_jurusan, id_dosen) VALUES ('$kode', '$jurusan', '$kpd')";


$tambah_data = mysqli_query($koneksi,$sql)

?>
<script>
    document.location="index.php";
</script>
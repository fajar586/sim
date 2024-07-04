<?php

$Nim  = $_POST['kode'];
$nama_mahasiswa = $_POST['nama'];
$ttl = $_POST['ttl'];
$tl  = $_POST['tl'];
$agama = $_POST['agama'];
$kode_jur = $_POST['kode jurusan'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$nama_foto = $_FILES['foto']['name'];
$tmp_file = $_FILES['foto']['tmp_name'];




include("../koneksi.php");


$sql = "INSERT INTO mahasiswa (nim,nama,tempat_tanggal_lahir,  taggal_lahir, id_jurusan, agama, foto, email ) VALUES ('$Nim, $nama_mahasiswa, , $ttl, $tl, $agama, $kode_jur, $email, $foto ')";


$tambah_data = mysqli_query($koneksi,$sql)

move_uploaded_file($tmp_file,"foto/$nama_foto")


?>
<script>
    document.location="index.php";
</script>

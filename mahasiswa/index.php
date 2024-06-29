<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../all.css">
</head>
<body>
<?php
include("../navbar.php");
?>
<div class="container mt-4">
  <div class="row">
    <div class="col-12 m-auto ">
    <div class="card">
                    <div class="card-header">
                        Data mahasiswa
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">tempat tanggal lahi</th>
                            <th scope="col">tanggal lahir</th>
                            <th scope="col">agama</th>
                            <th scope="col">id jurusan</th>
                            <th scope="col">foto</th>
                            <th scope="col">email</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                
                                include("../koneksi.php");

                                
                                $sql = "SELECT * FROM mahasiswa";

                        
                                $tampil_data = mysqli_query($koneksi,$sql);

                                
                                $nomor = 1;
                                foreach($tampil_data as $ms){
                            ?>

                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $ms['nim'] ?></td>
                                <td><?php echo $ms['nama'] ?></td>
                                <td><?php echo $ms['tempat_tanggal_lahir'] ?></td>
                                <td><?php echo $ms['tanggal_lahir'] ?></td>
                                <td><?php echo $ms['id_jurusan'] ?></td>
                                <td><?php echo $ms['agama'] ?></td>
                                <td><?php echo $ms['foto'] ?></td>
                                <td><?php echo $ms['email'] ?></td>
                                <td></td>
                            <?php
                                }
                            ?>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-eraser"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
    </div>
  </div>
</div>
    <script scr="../js/bootstrap.js"></script>
    <script scr="../all.js"></script>
</body>
</html>
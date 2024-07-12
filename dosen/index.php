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
    <div class="col-10 m-auto ">
    <div class="card">
                    <div class="card-header">
                    <a href="form.php" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">tempat tanggal lahir</th>
                            <th scope="col">tanggal lahir</th>
                            <th scope="col">jenjang</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                
                                include("../koneksi.php");

                                
                                $sql = "SELECT * FROM dosen";

                        
                                $tampil_data = mysqli_query($koneksi,$sql);

                                
                                $nomor = 1;
                                foreach($tampil_data as $dos){
                            ?>

                            <tr>
                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $dos['nidn'] ?></td>
                                <td><?php echo $dos['nama'] ?></td>
                                <td><?php echo $dos['tempat_tanggal_lahir'] ?></td>
                                <td><?php echo $dos['tanggal_lahir'] ?></td>
                                <td><?php echo $dos['jenjang'] ?></td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-eraser"></i></a></td>
                            <?php
                                }
                            ?>
                                    
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
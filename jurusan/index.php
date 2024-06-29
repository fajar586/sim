<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php
include("../navbar.php");
?>
<div class="container mt-4">
  <div class="row">
    <div class="col-7 m-auto ">
    <div class="card">
                    <div class="card-header">
                        <a href="form.php">tambah</a>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Jurusan</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Kaprodi</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                
                                include("../koneksi.php");

                                
                                $sql = "SELECT * FROM jurusan";

                        
                                $tampil_data = mysqli_query($koneksi,$sql);

                                
                                $nomor = 1;
                                foreach($tampil_data as $jur){
                            ?>

                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $jur['kode'] ?></td>
                                <td><?php echo $jur['nama_jurusan'] ?></td>
                                <td><?php echo $jur['id_dosen'] ?></td>
                                <td></td>
                            <?php
                                }
                            ?>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
    <script scr="../js/all.js"></script>
</body>
</html>
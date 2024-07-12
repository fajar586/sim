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
    <div class="col-6 m-auto ">
    <div class="card">
                    <div class="card-header">
                    <a href="form.php" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">jurusan</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                
                                include("../koneksi.php");

                                
                                $sql = "SELECT * FROM mahasiswa INNER JOIN jurusan ON mahasiswa.id_jurusan=jurusan.id_jurusan";

                        
                                $tampil_data = mysqli_query($koneksi,$sql);

                                
                                $nomor = 1;
                                foreach($tampil_data as $ms){
                            ?>

                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $ms['nim'] ?></td>
                                <td><?php echo $ms['nama'] ?></td>
                                <td><?php echo $ms['id_jurusan'] ?></td>
                                <td>
                                    <!-- tombol detail -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=""#detail<?php echo $jur['id_mahasiswa'] ?>"></button>">
                                    <i class="fa-solid fa-pencil"></i>
                                    </button>
                                    <!-- modal detail -->
                                    <div class="modal fade" id="detail<?php echo $jur['id_mahasiswa'] ?>"></div>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <table class="table">
                                          
                                            <tbody>
                                                <tr>
                                                <th scope="row">NIM</th>
                                                <td><?php echo $ms['nim'] ?></td>
                                                
                                                </tr>
                                               
                                            </tbody>
                                            </table>
    
                                            </div>
                                            
                                            </div>
                                        </div>
                                <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-eraser"></i></a>
                                </td>
                            <?php
                                }
                            ?>
                                    
                                
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
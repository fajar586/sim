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
        <h2> form tambah nama mahasiswa</h2>
                    <div class="card-header">
                    <form method="POST" action="add.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" class="form-control" name="kode" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">nama mahasiswa</label>
                                <input type="text" class="form-control" name="nama " id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                          
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">tempat tanggal lahir</label>
                                <input type="text" class="form-control" name="ttl" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">tanggal lahir</label>
                                <input type="date" class="form-control" name="tl" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">agama</label>
                                <select nama="" id="" class="form-control">
                                    <option value="">-pilih agama-</option>
                                    <option value="islam">islam</option>
                                    <option value="kristen">kristen</option>
                                    <option value="katholik">katholik</option>
                                    <option value="budha">budha</option>
                                    <option value="konghucu">konghucu</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> jurusan</label>
                                <select name="" id="" class="form-control">
                                    <option value="">-pilih jurusan-</option>
                                    <?php
                                
                                include("../koneksi.php");

                                
                                $sql = "SELECT * FROM jurusan";

                        
                                $tampil_data = mysqli_query($koneksi,$sql);

                                
                                $nomor = 1;
                                foreach($tampil_data as $jur){
                            ?>
                            <option value="<?php echo $jur['id_jurusan'] ?>"><?php echo $jur['nama'] ?></option>
                            <?php
                                }
                            ?>
                                </select>
                            
                                
                               
              
                            </div>
                           
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">email</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">jenis kelamin</label>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="laki-laki" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    laki-laki
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="perempuan">
                                <label class="form-check-label" for="exampleRadios2">
                                    perempuan
                                </label>
                                </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">foto</label>
                                <input type="file" class="form-control" name="foto" accept="image/*" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="index.php" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                    <div class="card-body">
                    
                    </div>
                </div>
    </div>
  </div>
</div>
    <script scr="../js/bootstrap.js"></script>
    <script scr="../js/all.js"></script>
</body>
</html>
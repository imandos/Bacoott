<?php

require 'config.php';

//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Belajar CRUD</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/dasboard.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar-left -->
    <div class="bg-primary-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">TEMPAT LOGO </div>
      <div class="list-group">
        <a href="index.html" class="list-group-item-action"><span class="mdi mdi-view-dashboard mr-2"></span> Dashboard</a>
        <a href="list-peserta.php" class="list-group-item-action"><span class="mdi mdi-nintendo-game-boy mr-2"></span> List Peserta</a>
        <a href="input.php" class="list-group-item-action"><span class="mdi mdi-card-account-details-star mr-2"></span> Input User</a>
        <a href="#collapseExample" class="list-group-item-action" data-toggle="collapse">
          <span class="mdi mdi-flash-circle mr-2"></span> Menu 2 <span class="mdi mdi-chevron-right" style="float: right;"></span>
        </a>
        <div class="list-group collapse" id="collapseExample">
          <div class="card card-body pr-0" style="list-style-type:none">
              <li><a href="#" class="list-group-item-action" style="display: block;">Menu 100</a></li>
              <li><a href="#" class="list-group-item-action" style="display: block;">Menu 200</a></li>
              <li><a href="#" class="list-group-item-action" style="display: block;">Menu 300</a></li>
          </div>
      </div>
      </div>
    </div>

    <!-- Area Konten -->
    <div id="page-content-wrapper">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
        <button class="btn btn-light rounded-circle" id="menu-toggle" ><span class="mdi mdi-menu"></span></button>
        <div class="ml-auto d-flex">
          <span class="px-3 align-self-center text-secondary" style="border-left: 1px solid rgb(196, 196, 196);">Admin</span>
          <div class="img-profil" type="button">
            <img src="https://image.flaticon.com/icons/svg/560/560216.svg" alt="">
          </div>
        </div>
      </nav>

      <!-- Konten Utama -->
      <div class="container">
        
          <div class="row pt-5 pb-2">
            <div class="col-12">
            <?php
                if ( isset($_POST["submit"]) ) {
 
                  if ( edit($_POST) > 0) {
                     echo 
                      "<div class='alert alert-success' role='alert'>
                        Data Berhasil Diubah
                      </div>";
                  } else {
                    echo "gagal";
                  }
            }
            ?>
            </div>
            



            <div class="col-md-12 pb-3"> 
              <div class="card shadow">
                <div class="card-body">
                    <h3>Ubah Data Mahasiswa</h3>
                    <hr>
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <input type="hidden" name="id" id="nama" value="<?php echo $mhs["id"]; ?>">
                        <input type="hidden" name="gambarLama" value="<?php echo $mhs["gambar"]; ?>">

                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="nama" class="small">Nama</label>
                              <input type="text" class="form-control" name="nama" id="nama" 
                                value="<?php echo $mhs["nama"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="nim" class="small">NIM</label>
                              <input type="text" class="form-control" name="nim" id="nim"
                                value="<?php echo $mhs["nim"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="email" class="small">Email</label>
                              <input type="email" class="form-control" name="email" id="email"
                                value="<?php echo $mhs["email"]; ?>">
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="jurusan" class="small">Jurusan</label>
                              <input type="text" class="form-control" name="jurusan" id="jurusan"
                                value="<?php echo $mhs["jurusan"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                          <label for="gambar" class="small">Upload Gambar</label> <br>
                            <img class="img-fluid" src="img/<?php echo $mhs["gambar"]; ?>" alt="" width="150">
                            <br>
                            <div class="my-3">
                              <input type="file" name="gambar" id="gambar">
                            </div>
                            <!-- <div class="form-group">
                              <label for="gambar" class="small">Gambar</label>
                              <input type="file" class="form-control" name="gambar" id="gambar">
                            </div> -->
                        </div>

                        <hr>

                        <div class="col-md-12">
                            <div class="text-right">
                              <button type="submit" name="submit"  class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>

                      </div>
                    </form>
                </div>

              </div>
            </div>

          </div>
      </div>

    </div>
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- Menu Toggle Script -->
  <script type="text/javascript">
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

  </script>

</body>

</html>

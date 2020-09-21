
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

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
        <a href="#" class="list-group-item-action"><span class="mdi mdi-view-dashboard mr-2"></span> Dashboard</a>
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
        <!-- <div class="dropdown ml-auto">
            <div class="img-profil" type="button">
              <img src="https://cdn.siap.id/s3/smart village/portal/bg-visi-misi.png" alt="">
            </div>
        
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </div> -->
      </nav>

      <!-- Konten Utama -->
      <div class="container">
        <div class="row pt-5 pb-2">
          <div class="col-md-12"> 
            <h2 class="mb-md-3 text-secondary">Dasboard</h2>           
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb shadow" style="background-color: #fff!important;">
                <li class="breadcrumb-item"><a href="#"> <span class="mdi mdi-home"></span> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
          </div>
          <div class="col-md-12 pb-3"> 
            <div class="card shadow">
              <div class="row no-gutters">
                <div class="col-md-3" style="background-color: #4e73df;">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">SELAMAT DATANG DI APLIKASI ABC</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    
                    <table class="table table-sm text-muted">
                      <thead>
                        <tr>
                          <th colspan="2" scope="col">Primary Task</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="2">Mark</td>
                          <td><span class="mdi mdi-check-circle text-success"></span></td>
                        </tr>
                        <tr>
                          <td colspan="2">Jacob</td>
                          <td><span class="mdi mdi-check-circle text-success"></span></td>
                        </tr>
                        <tr>
                          <td colspan="2">Larry the Bird</td>
                          <td><span class="mdi mdi-alert-circle text-danger"></span></td>
                        </tr>
                      </tbody>
                    </table>
                    <p class="card-text"><small class="text-muted">Terakhir update 3 jam yang lalu</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 my-2">
            <div class="card shadow" style="border-left: 5px solid #4e73df; ">
              <div class="card-body">
                <div class="row">
                  <div class="col-8 align-self-center">
                    <div class="small text-primary"> SEKOLAH PESERTA </div>
                    <h3 class="text-muted"> 1000</h3>
                  </div>
                  <div class="col-4">
                    <span class="mdi mdi-school" style="font-size: 50px; color: rgb(196, 196, 196);"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-2">
            <div class="card shadow" style="border-left: 5px solid #1cc88a; ">
              <div class="card-body">
                <div class="row">
                  <div class="col-8 align-self-center">
                    <div class="small" style="color: #1cc88a;"> SISWA YANG MENDAFTAR </div>
                    <h3 class="text-muted"> 53667258</h3>
                  </div>
                  <div class="col-4">
                    <span class="mdi mdi-microsoft-xbox" style="font-size: 50px; color: rgb(196, 196, 196);"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-2">
            <div class="card shadow" style="border-left: 5px solid #e69538; ">
              <div class="card-body">
                <div class="row">
                  <div class="col-8 align-self-center">
                    <div class="small" style="color: #e69538;"> SEKOLAH PESERTA </div>
                    <h3 class="text-muted"> 1000</h3>
                  </div>
                  <div class="col-4">
                    <span class="mdi mdi-sony-playstation" style="font-size: 50px; color: rgb(196, 196, 196);"></span>
                  </div>
                </div>
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
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>

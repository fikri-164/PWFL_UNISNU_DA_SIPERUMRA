<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/SI PERUMRA.png') ?>">
  <title>SI PERUMRA - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
                <img style="margin:20px " width="100%" src="<?php echo base_url('assets/img/SI PERUMRA.PNG'); ?>">
              </div>
              <div class="col-lg-6">
                <div class="p-5">

                  <div class="text-center">
                  <!-- <img src="<?php echo base_url('assets/img/SI PERUMRA.PNG'); ?>" width="80px" ><br/> -->
                    <h2 class="h4 text-gray-900 mb-4">PENDAFTARAN</h2>
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Lengkapi Form Berikut</h1>
                  </div>
                  <form action="<?php echo base_url('c_login/login'); ?>" method="post">

                    <center><b>NAMA PEMILIK UMKM</b></center>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nav-icon fa fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control" type="text" placeholder="Nama Pemilik UMKM" name="nama_umkm">
                    </div>

                    <center><b>NAMA UMKM</b></center>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nav-icon fa fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control" type="text" placeholder="Nama UMKN" name="password">
                    </div>

                    <center><b>PASSWORD</b></center>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nav-icon fa fa-lock"></i>
                        </span>
                      </div>
                      <input class="form-control" type="password" placeholder="password" name="password">
                    </div>

                    <center><b>JENIS UMKM</b></center>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nav-icon fa fa-list"></i>
                        </span>
                      </div>
                      <select name="" class="form-control">
                        <option value="Kerajinan" selected="kerajinan">Kerajinan
                        </option>

                        <option value="Fashion" selected="fashion">Fashion
                        </option>

                        <option value="Kuliner" selected="kuliner">Kuliner
                        </option>

                        <option value="Mebel" selected="mebel">Mebel
                        </option>

                      </select>
                    </div>

                    <center><b>PROFILE UMKM</b></center>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nav-icon fa fa-"></i>
                        </span>
                      </div>
                      <textarea class="form-control">
                        
                      </textarea>
                    </div>

                    <center><b>CONTACT PERSON</b></center>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nav-icon fa fa-contact"></i>
                        </span>
                      </div>
                      <input class="form-control" type="text" placeholder="Contoh : 0894433xxxx " name="password">
                    </div>
                  
                    <button class="btn btn-primary btn-user btn-block" type="summit">Daftar</button>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk Admin SIMBG Kota Semarang</title>
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= base_url('assets/ico/apple-touch-icon-57x57.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/ico/apple-touch-icon-114x114.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/ico/apple-touch-icon-72x72.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/ico/apple-touch-icon-144x144.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= base_url('assets/ico/apple-touch-icon-60x60.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= base_url('assets/ico/apple-touch-icon-120x120.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= base_url('assets/ico/apple-touch-icon-76x76.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= base_url('assets/ico/apple-touch-icon-152x152.png') ?>" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-196x196.png') ?>" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-96x96.pn') ?>g" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-32x32.png') ?>" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-16x16.png') ?>" sizes="16x16" />
  <link rel="icon" type="image/png" href="a<?= base_url('ssets/ico/favicon-128.png') ?>" sizes="128x128" />
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/feather.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/typicons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/simple-line-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/vendor.bundle.base.css') ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <!-- endinject -->
 
</head>

<body>

<div class="container-fluid p-0" style="height: 100vh; background-image: url(<?=base_url('assets/img/bg-depan.jpg')?>); background-size: cover;" >
    <div class="container-fluid d-flex align-items-top justify-content-center p-0 h-100" >
      <div class="card m-auto rounded-2 p-5 glass">
        <div class="row align-items-center">
            <div class="col border-end border-1">
              
                <img class="img-thumbnail border border-0 bg-transparent p-3" src="<?= base_url('assets/img/_ff47449a-cae2-4133-9c58-f795dbfa9d0a-removebg-preview1.svg') ?>" alt="" width="500px">
            </div>

            <div class="col">

                <form class="pt-3" action="<?= base_url('Backoffice/authentication') ?>" method="post">
                
                <img class=" mb-3" src="<?= base_url('assets/img/logo.png') ?>" alt="" width="150px">
                

                <div class="form-floating my-2">
                    <input type="email" class="form-control" id="user" name="user" placeholder="Masukkan Email Pengguna">
                    <label for="floatingInput">Nama Pengguna</label>
                </div>
                <div class="form-floating my-2">
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Kata Sandi">
                    <label for="floatingPassword">Kata Sandi</label>
                </div>
                <button id="btnmasuk" class="btn btn-dark w-100 py-3 my-3" type="submit"><p class="h5 m-0">MASUK</p></button>

            </form>


            </div>

        </div>
      </div>
        

    </div>
</div>
  
  <!-- container-scroller -->
  <!-- plugins:js -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('assets/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('assets/js/template.js') ?>"></script>
  <script src="<?= base_url('assets/js/settings.js') ?>"></script>
  <script src="<?= base_url('assets/js/todolist.js') ?>"></script>
  <!-- endinject -->
</body>

</html>
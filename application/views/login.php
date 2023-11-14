<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Backofffice SIMBG Kota Semarang</title>
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
  <link rel="stylesheet" href="<?=base_url('assets/css/feather.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/materialdesignicons.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/typicons.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/simple-line-icons.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/vendor.bundle.base.css')?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url('assets/css_bo/style.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url('assets/css_bo/favicon.png')?>" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?=base_url('assets/css_bo/logo.svg')?>" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to memulai.</h6>
              <form class="pt-3" action="<?=base_url('Backoffice/authentication')?>" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="user" id="user" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="pwd" id="pwd" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" value="SIGN IN" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >
               
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url('assets/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?=base_url('assets/js/bootstrap-datepicker.min.js')?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?=base_url('assets/js/off-canvas.js')?>"></script>
  <script src="<?=base_url('assets/js/hoverable-collapse.js')?>"></script>
  <script src="<?=base_url('assets/js/template.js')?>"></script>
  <script src="<?=base_url('assets/js/settings.js')?>"></script>
  <script src="<?=base_url('assets/js/todolist.js')?>"></script>
  <!-- endinject -->
</body>

</html>

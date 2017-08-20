<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?=$title?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url('logo.png')?>" type="image/x-icon">
    <?php
      if (isset($og_site_name))
          echo "<meta property='og:site_name' content='".$og_site_name."'/>";
      if (isset($og_image))
          echo "<meta property='og:image' content='".$og_image."'/><meta property='og:image:width' content='200' />
          <meta property='og:image:height' content='200' />";
      if (isset($og_title))
          echo "<meta property='og:title' content='".$og_title."'/>";
      if (isset($og_description))
          echo "<meta property='og:description' content='".$og_description."'/>";
      if (isset($og_type))
          echo "<meta property='og:type' content='".$og_type."'/>";
      if (isset($og_url))
          echo "<meta property='og:url' content='".$og_url."'/>";
  ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url('assets/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url('assets/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?=base_url('assets/plugins/morrisjs/morris.css')?>" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="<?=base_url('assets/plugins/sweetalert/sweetalert.css')?>" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?=base_url('assets/plugins/bootstrap-select/css/bootstrap-select.css')?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url('assets/css/themes/all-themes.css')?>" rel="stylesheet" />
 </head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">karya Ilmiah <b>Online</b></a>
            <small></small>
        </div>
        <div class="card">
            <div class="body">
                <?php echo form_open('register') ?>
                    <div class="msg">Mendaftar</div>
                    <?= $this->session->flashdata('msg') ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username (huruf/angka dan tanpa spasi)" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                          <select class="form-control" name="id_jenis_kelamin" required>
                              <option value="">-- Jenis Kelamin --</option>
                             
                                <option value="1">Laki - Laki</option>
                                <option value="2">Perempuan</option>
                            
                              </select>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Alamat Email" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink" required>
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>

                    <input class="btn btn-block btn-lg bg-pink waves-effect" type="submit" name="register" value="Daftar">

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?=base_url('login')?>">Sudah punya akun?</a>
                    </div>
                <?php form_close() ?>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
        <script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>

        <!-- Bootstrap Core Js -->
        <script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.js')?>"></script>

        <!-- Select Plugin Js -->
        <script src="<?=base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="<?=base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="<?=base_url('assets/plugins/node-waves/waves.js')?>"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="<?=base_url('assets/plugins/jquery-countto/jquery.countTo.js')?>"></script>

        <!-- Jquery Validation Plugin Css -->
        <script src="<?=base_url('assets/plugins/jquery-validation/jquery.validate.js')?>"></script>

        <!-- JQuery Steps Plugin Js -->
        <script src="<?=base_url('assets/plugins/jquery-steps/jquery.steps.js')?>"></script>

        <!-- Morris Plugin Js -->
        <script src="<?=base_url('assets/plugins/raphael/raphael.min.js')?>"></script>
        <script src="<?=base_url('assets/plugins/morrisjs/morris.js')?>"></script>

        <!-- ChartJs -->
        <script src="<?=base_url('assets/plugins/chartjs/Chart.bundle.js')?>"></script>

        <!-- Flot Charts Plugin Js -->
        <script src="<?=base_url('assets/plugins/flot-charts/jquery.flot.js')?>"></script>
        <script src="<?=base_url('assets/plugins/flot-charts/jquery.flot.resize.js')?>"></script>
        <script src="<?=base_url('assets/plugins/flot-charts/jquery.flot.pie.js')?>"></script>
        <script src="<?=base_url('assets/plugins/flot-charts/jquery.flot.categories.js')?>"></script>
        <script src="<?=base_url('assets/plugins/flot-charts/jquery.flot.time.js')?>"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="<?=base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

        <!-- Jquery Validation Plugin Css -->
        <script src="<?=base_url('assets/plugins/jquery-validation/jquery.validate.js')?>"></script>

        <!-- JQuery Steps Plugin Js -->
        <script src="<?=base_url('assets/plugins/jquery-steps/jquery.steps.js')?>"></script>

        <!-- Sweet Alert Plugin Js -->
        <script src="<?=base_url('assets/plugins/sweetalert/sweetalert.min.js')?>"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="<?=base_url('assets/plugins/node-waves/waves.js')?>"></script>

        <!-- Sparkline Chart Plugin Js -->
        <script src="<?=base_url('assets/plugins/jquery-sparkline/jquery.sparkline.js')?>"></script>

        <!-- Custom Js -->
        <script src="<?=base_url('assets/js/admin.js')?>"></script>
        <script src="<?=base_url('assets/js/pages/index.js')?>"></script>
        <script src="<?=base_url('assets/js/pages/forms/form-validation.js')?>"></script>

        <!-- Demo Js -->
        <script src="<?=base_url('assets/js/demo.js')?>"></script>
</body>

</html>

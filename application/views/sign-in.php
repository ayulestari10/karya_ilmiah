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
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="1a5f13ff-8482-461b-bb02-80c8af42a287";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Karya Ilmiah<b> Online</b></a>
            <small></small>
        </div>
        <div class="card">
            <div class="body">
                <?php echo form_open('login') ?>
                    <div class="msg">Silahkan lakukan login</div>
                    <?= $this->session->flashdata('msg') ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username/NIM" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div><center>
                    <div class="row">
                        <div class="col-xs-4">
                            <input class="btn btn-block bg-pink waves-effect" type="submit" name="login" value="Login">
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="<?=base_url('register')?>">Daftar Sekarang!</a>
                        </div>
                        </center>
                        <!-- <div class="col-xs-6 align-right">
                            <a href="">Forgot Password?</a>
                        </div> -->
                    </div>
                <?php echo form_close() ?>
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

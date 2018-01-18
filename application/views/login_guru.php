<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/images/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ALPHA</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url();?>/assets/css/demo.css" rel="stylesheet" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/now-ui-kit" />
    <!--  Social tags      -->
    <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, now ui, now ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">
    <meta name="description" content="Start your development with a beautiful Bootstrap 4 UI kit. It is yours Free.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Now UI Kit by Creative Tim">
    <meta itemprop="description" content="Start your development with a beautiful Bootstrap 4 UI kit. It is yours Free.">
    <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/56/original/opt_nuk_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Now UI Kit by Creative Tim">
    <meta name="twitter:description" content="Start your development with a beautiful Bootstrap 4 UI kit. It is yours Free.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/56/original/opt_nuk_thumbnail.jpg">
    <meta name="twitter:data1" content="Now UI Kit by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="Free">
    <meta name="twitter:label2" content="Price">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Now UI Kit by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/now-ui-kit/index.html" />
    <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/56/original/opt_nuk_thumbnail.jpg" />
    <meta property="og:description" content="Start your development with a beautiful Bootstrap 4 UI kit. It is yours Free." />
    <meta property="og:site_name" content="Creative Tim" />
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(<?php echo base_url();?>assets/images/bg-01.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="post" action="<?php echo base_url(); ?>index.php/guru_login/login_guru">
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="<?php echo base_url();?>/assets/images/logo.png" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                </span>
                                <input type="text" name="NM_GURU" autocomplete="opt_nuk_thumbnail" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="NIK" placeholder="Password" autocomplete="off" class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                        <Input type="submit" name="submit" value="Login" class="btn btn-primary btn-round btn-lg btn-block" >
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url();?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="<?php echo base_url();?>assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url();?>assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
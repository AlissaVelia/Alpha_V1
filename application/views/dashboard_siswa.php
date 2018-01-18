<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ALPHA</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />
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

<body class="profile-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            
            <div class="navbar-translate">
                <a class="navbar-brand" href="#" rel="tooltip" title="Siapkah kamu hari ini?" data-placement="bottom" target="_blank">
                    <?php echo hari();?><?php echo tanggal();?> 
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" data-nav-image="<?php echo base_url();?>assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                  
                    <li class="nav-item">

                        <a class="nav-link" rel="tooltip" title="Logout" data-placement="bottom" href="<?php echo base_url();?>index.php/siswa_login/logout" >
                            <i class="fa fa-sign-out"></i>
                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo base_url();?>assets/img/bg5.jpg');">
            </div>
            <div class="container">
                <div class="content-center">
                    <div class="photo-container">
                        <img src="<?php echo base_url();?>assets/images/studen.png" alt="">
                    </div>
                    <h3 class="title"><?php echo $this->session->userdata('NM_SISWA'); ?> </h3>
                    <p class="category">Siswa</p>
                    <div class="content">
                        <div class="social-description">
                            <?php foreach ($list as $row):?>
                            <h2><?php echo $row->JML_IJIN?></h2>
                             <?php endforeach; ?>
                            <p>Ijin</p>
                        </div>
                        <div class="social-description">
                            <?php foreach ($list as $row):?>
                            <h2><?php echo $row->JML_SAKIT?></h2>
                             <?php endforeach; ?>
                            <p>Sakit</p>

                        </div>
                        <div class="social-description">
                            <?php foreach ($list as $row):?>
                            <h2><?php echo $row->JML_ALPA?></h2>
                             <?php endforeach; ?>
                            <p>Alpa</p>
                        </div>
                        <div class="social-description">
                            <?php foreach ($list as $row):?>
                            <h2><?php echo $row->JML_MASUK?></h2>
                             <?php endforeach; ?>
                            <p>Masuk</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

            <div class="container">
             
        <div class="section">
        if (){
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/siswa/dashboard/masuk" method="post">
                <div class="button-container">
                    
                    <input type="submit" class="btn btn-primary btn-round btn-lg" rel="tooltip" title="Ayo Absen" value="Masuk" name="submit">

                    
                    
                </div>
                </form>
        } else {
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/siswa/dashboard/pulang" method="post">
                <div class="button-container">
                    
                    <input type="submit" class="btn btn-primary btn-round btn-lg" rel="tooltip" title="Ayo Absen" value="Pulang" name="submit">
                    
                    
                    
                </div>
                </form>
        }
                 <h4 class="title text-center">About Me</h4>
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Profile</a>
                                    </li>
                                    
                                </ul>
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                            <div class="home">
                              <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                      <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS </th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Ijin</th>
                                    <th>Sakit</th>
                                    <th>Alpha</th>
                              

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>       <?php $no = 1;?>
                        <?php foreach ($NIS as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->NIS?></td>
                                <td><?php echo $row->NM_SISWA?></td>
                                <td><?php echo $row->LAST_ABSEN?></td>
                                <td ><?php echo $row->IJIN ?></td>
                                <td ><?php echo $row->SAKIT ?></td>
                                <td ><?php echo $row->ALPA ?></td>
                                
                                </td>
                                 
                          
                                
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                        </tbody>
                                </table>
                             
                                
                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="col-sm-12 col-lg-12">
                                <div class="form-group" style="text-align: center">
                                   <p>NIS : </p> <input type="text" value="<?php echo $hai->NIS; ?>" placeholder="" class="form-control" disabled />
                                   <p>Nama Wali Siswa : </p> <input type="text" value="<?php echo $hai->KD_WALSIS ; ?>" placeholder="" class="form-control" disabled />
                                    <p>Kelas : </p> <input type="text" value="<?php echo $hai->KD_KELAS; ?>" placeholder="" class="form-control" disabled />
                                   <p>Nama Siswa : </p> <input type="text" value="<?php echo $hai->NM_SISWA; ?>" placeholder="" class="form-control" disabled />
                                   <p>TTL : </p> <input type="text" value="<?php echo $hai->TTL; ?>" placeholder="" class="form-control" disabled />
                                   <p>Alamat : </p> <input type="text" value="<?php echo $hai->ALAMAT; ?>" placeholder="" class="form-control" disabled />
                                   <p>Asal SMP : </p> <input type="text" value="<?php echo $hai->ASAL_SMP; ?>" placeholder="" class="form-control" disabled />
                                   <p>No Telp : </p> <input type="text" value="<?php echo $hai->NO_TELP; ?>" placeholder="" class="form-control" disabled />
                                   <p>Nama Ayah : </p> <input type="text" value="<?php echo $hai->NM_AYAH; ?>" placeholder="" class="form-control" disabled />
                                   <p>Nama Ibu : </p> <input type="text" value="<?php echo $hai->NM_IBU; ?>" placeholder="" class="form-control" disabled />
                                   <p>Jenis Kelamin : </p> <input type="text" value="<?php echo $hai->JENKEL; ?>" placeholder="" class="form-control" disabled />
                                </div>

                              
                                  
                                
                  
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                    
                        <!-- <!-- <!-- <h4 class="title text-center">My Portfolio</h4>
                       
                    </div>
                    <!-- Tab panes
                    <div class="tab-content gallery">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url();?>assets/img/bg1.jpg" alt="" class="img-raised">
                                        <img src="<?php echo base_url();?>assets/img/bg3.jpg" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url();?>assets/img/bg8.jpg" alt="" class="img-raised">
                                        <img src="<?php echo base_url();?>assets/img/bg7.jpg" alt="" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url();?>assets/img/bg6.jpg" class="img-raised">
                                        <img src="<?php echo base_url();?>assets/img/bg11.jpg" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url();?>assets/img/bg7.jpg" alt="" class="img-raised">
                                        <img src="<?php echo base_url();?>assets/img/bg8.jpg" alt="" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url();?>assets/img/bg3.jpg" alt="" class="img-raised">
                                        <img src="<?php echo base_url();?>assets/img/bg8.jpg" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url();?>assets/img/bg7.jpg" alt="" class="img-raised">
                                        <img src="<?php echo base_url();?>assets/img/bg6.jpg" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --> 
        <footer class="footer footer-default">
            <div class="container">
                <!-- <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Alpha Team SMK Telkom Malang.
                </div>
            </div>
        </footer>
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
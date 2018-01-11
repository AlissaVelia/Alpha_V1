<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ALPHA</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url();?>assets/login_template/css/style.css">

  
</head>

<body style="background-image: url('<?php echo base_url()?>assets/images/as.jpg'); ">
  <div >
    <div class="container">
        <h1>Welcome</h1>
        
        <form action="<?php echo base_url(); ?>index.php/guru_login/login_guru" method="post" class="login-form">
                                    <div class="form-group">
                                       
                                        <input type="text" name="NM_GURU" placeholder="USERNAME" class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="password" name="NIK" placeholder="PASSWORD" class="form-password form-control" id="form-password" >
                                    </div>
                                    <Input type="submit" name="submit" value="SIGN IN" class="btn btn-danger btn-block" >
                                </form>
    </div>
    
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
         <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url();?>assets/login_template/js/index.js"></script>

</body>
</html>

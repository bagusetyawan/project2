<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Store v.1.2!</title>


    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <!-- <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a> -->

      <div class="login_wrapper">
        
          <section class="login_content">
            <form id="formLogin">
              <h1>Please Login</h1>
              <div>
                <input type="text" id="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" id="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <div id="error" class="pull-left" style="color: red"></div>
                <button type="submit" class="btn btn-default submit pull-right">Login</button>
              </div>
            </form>
            
            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-opencart"></i> My Store</h1>
                <p>©2018 All Rights Reserved.</p>
              </div>
              
              
            </div>
          </section>

        
      </div>
    </div>
  </body>

      <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/jquery-validation/parsley.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#username").focus();
    });

    //proses transaksi
      $('#formLogin').parsley().on('form:submit', function() {
        var user = $('#username').val();
        var pass = $('#password').val();
        $("#error").html("Checking...");
        
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/login/getCredentials')?>",
            dataType : "JSON",
            data : {username:user, password:pass},
            success: function(data){
              if(data == '0'){
                $("#error").html("<span>Maaf, username/password salah</span>");
              }
               else{
                window.location.replace("<?php echo base_url(); ?>");
              }
            }
        });

        return false;
      });
  </script>
</html>

<?php ob_start(); include "admin/inc/config.php"; include 'admin/inc/phpFunctions.php';  date_default_timezone_set("Africa/Lagos");  

		if (isset($_GET["id"])=="lout")
		{
			$_SESSION["smuser"] = "";
			$_SESSION["clrs"] = "";
			$_SESSION["pic"] = "";
			
			$_SESSION["term"] = "";
			$_SESSION["session"] = "";
		}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>K9SMS | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/plugins/iCheck/square/blue.css">

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  
  	<img class="img img-circle" src="admin/files/school/<?php echo getSchAttr("logo")?>" width="150" height="150" /><br>
    <a href=""><b><?php echo getSchAttr("shortName")?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
				
                <?php
                		if (isset($_POST["go"])=="signIn")
						{
							$uid = mysql_real_escape_string(filter_var(strtoupper($_POST["uid"]), FILTER_SANITIZE_STRING));
							$upass = mysql_real_escape_string(filter_var($_POST["upass"], FILTER_SANITIZE_STRING));
							
							if ($uid and $upass)
							{
								$q = mysql_query("select * from staff where staffID='$uid'");
								if (@mysql_num_rows($q)>0)
								{
									$fPass = mysql_result($q , 0, "password");
									
									if ($fPass==$upass)
									{
										
										//check status of user
										$status = mysql_result($q, 0, "status");
										
										
										$clrs = mysql_result($q, 0, "clrs");
										$pic = mysql_result($q, 0, "pic");
										$_SESSION["smuser"] = $uid;
										$_SESSION["clrs"] = $clrs;
										$_SESSION["pic"] = $pic;
										setAcademicSession();
										
										//redirections base on clearance
										/*
											<option value="">Select Clearance</option>
											<option value="ADMIN">ADMIN</option>
											<option value="PRINCIPAL">PRINCIPAL</option>
											<option value="ACCOUNTANT">ACCOUNTANT</option>
											<option value="DEAN">DEAN</option>
											<option value="EOFFICER">EXAM OFFICER</option>
											<option value="STAFF">STAFF</option>
										*/
										header("Location: admin/index.php");
									}else {echo "<div class='alert alert-danger'>Wrong Password</div>";}
								}else {echo "<div class='alert alert-danger'>Wrong User ID</div>";}
							}else {echo "<div class='alert alert-danger'>Fill all fields</div>";}
						}
				?>
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="User ID" name="uid">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="upass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="go" value="signIn">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

    <a href="#">I forgot my password</a><br>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
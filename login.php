<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/plugins/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Login</b>Firebase</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <div class="alert alert-danger alert-dismissible" id="verified-alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Email Has Not Been Verified, Please check your email to verify your account 
      </div>
      <form method="post" id="formLogin">
        <div class="form-group has-feedback field-login-email" >
          <input type="email" class="form-control" name="txtEmail" id="txtEmail-formLogin" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span><span class="help-block"></span>
        </div>
        <div class="form-group has-feedback field-login-password">
          <input type="password" class="form-control" name="txtPassword" id="txtPassword-formLogin" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span><span class="help-block"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">
           <button type="submit" id="btn-signup" class="btn btn-success btn-block btn-flat">Sign Up</button>
         </div>
         <div class="col-xs-4">
           <button type="submit" id="btn-logout" class="btn btn-default btn-block btn-flat">Logout</button>
         </div>
         <!-- /.col -->
         <div class="col-xs-4 pull-right">
          <button type="submit" id="btn-signin" class="btn btn-primary btn-block btn-flat has-error">Sign In</button>
        </div>

        <!-- /.col -->
      </div>
    </form>
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
      Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat" id="btn-login-google"><i class="fa fa-google-plus"></i> Sign in using
      Google+</a>
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
<script src="assets/js/auth_firebase.js"></script>
</body>
</html>

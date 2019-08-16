<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('admin_lte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_lte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin_lte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_lte/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/iCheck/square/blue.css')}}">

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
    {{-- <a href="index2.html" class="logo col-md-12">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span><img src="{{asset('img/bricm.png')}}" alt=" Logo" class="img-responsive bricm"></<img></span>
      </a> --}}
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
        <a href="index2.html" class="logo col-md-12">
                <!-- mini logo for sidebar mini 50x50 pixels -->
             <span><img src="{{asset('img/bricm.png')}}" alt=" Logo" class="img-responsive bricm"></<img></span>
         </a>
         <form class="form-auth-small" action="/postlogin" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="signin-email" class="control-label sr-only">Email</label>
                <input name="email" type="email" class="form-control" id="signin-email" value="" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="signin-password" class="control-label sr-only">Password</label>
                <input name="password" type="password" class="form-control" id="signin-password" value="" placeholder="Password">
            </div>
            <div class="form-group clearfix">

            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
            <div class="bottom">
                <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
            </div>
        </form>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('admin_lte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin_lte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('admin_lte/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

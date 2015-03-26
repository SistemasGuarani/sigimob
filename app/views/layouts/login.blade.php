<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sigimob</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.2 -->
		{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
		<!-- Font Awesome Icons -->
		{{ HTML::style('font-awesome-4.3.0/css/font-awesome.min.css') }}
		<!-- Theme style -->
		{{ HTML::style('css/AdminLTE.min.css') }}
		<!-- iCheck -->
		{{ HTML::style('plugins/iCheck/square/blue.css') }}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="login-page">
		<div class="login-box">
			<div class="login-logo">
				<b>SIGIMOB</b>
				</div><!-- /.login-logo -->
				<div class="login-box-body">
						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Email"/>
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" placeholder="Senha"/>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="row">
							<div class="col-xs-8">
								<div class="checkbox icheck">
									<label>
										<input type="checkbox"> Manter logado
									</label>
								</div>
								</div><!-- /.col -->
								<div class="col-xs-4">
									<a href="{{action('IndexController@index')}}">
										<button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
									</a>
									</div><!-- /.col -->
								</div>
							</div><!-- /.login-box-body -->
							</div><!-- /.login-box -->
							<!-- jQuery 2.1.3 -->
							{{ HTML::script('plugins/jQuery/jQuery-2.1.3.min.js') }}
							<!-- Bootstrap 3.3.2 JS -->
							{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
							<!-- iCheck -->
							{{ HTML::script('plugins/iCheck/icheck.min.js') }}
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
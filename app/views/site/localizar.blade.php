<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>SIGIMOB</title>

    <!-- Bootstrap -->
    {{ HTML::style('bootstrap/css/bootstrap.css') }}
    {{ HTML::style('bootstrap/css/bootstrap-theme.css') }}

    <!-- siimple style -->
    {{ HTML::style('css/site.css') }}
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">SIGIMOB</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://sistemasguarani.esy.es" target="_blank">Site</a></li>
			<li><a href="{{action('LoginController@login')}}">Entrar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="header">
		<div class="container">
			<div class="row">
				<div>
					aqui o conteudo do mapa
				</div>				
			</div>
		</div>
	</div>
	<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<p class="copyright">Copyright &copy; 2015 <a href="http://sistemasguarani.esy.es">Sistemas Guarani</a>. Todos os direitos reservados.</p>					
			</div>
		</div>		
	</div>	
	</div>
    {{ HTML::script('plugins/jQuery/jQuery-2.1.3.min.js') }}
	{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
  </body>
</html>

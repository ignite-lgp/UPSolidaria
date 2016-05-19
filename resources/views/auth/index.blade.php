<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../src/imgs/logo_upsolidaria.png">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

	<title>UP Solidária</title>

	<!-- Bootstrap core CSS -->
	<link href="../../src/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../../src/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../../src/css/upsolidaria.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../../src/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>

  <body>
	    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
	<!-- Upper bar, contains authentication and language -->
	<nav class="navbar navbar-inverse navbar-little">
		<section class="auth hidden-xs">
			<section class="auth-left">
				<a id="auth-span">Autenticar-se</a>
			</section>
			<section class="auth-right">
				<span id="auth-span" class="glyphicon glyphicon-lock"></i>
			</section>
		</section>
		<section class="search-visible-xs visible-xs">
			<span id="search-span" class="glyphicon glyphicon-search"></i>
		</section>
		<section class="auth-visible-xs visible-xs">
			<span id="auth-span" class="glyphicon glyphicon-lock"></i>
		</section>
		<section class="language-visible-xs visible-xs">
			<a id="language-link" href="#"><span id="language-span-capital">en</span></a>
		</section>   
		<section class="language hidden-xs">
			<a id="language-link" href="#"><span id="language-span">en</span></a>
		</section>	  
	</nav>
	
	<!-- Navigation bar -->
	<nav class="navbar navbar-inverse navigation-gradient navbar-margin">
	  <div class="container" id="container-navbar">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="./"><img src = "../../src/imgs/logo.png" id="logo"></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav navigation-options">
			<li><a href="#about">quem somos</a></li>
			<li><a href="#organizations">organizações</a></li>
			<li><a href="#activities">atividades</a></li>
			<li><a href="#news">notícias</a></li>
			<li><a href="#contacts">contactos</a></li>
		  </ul>
		  <section class="search hidden-xs">
			<span id="search-icon" class="glyphicon glyphicon-search"></span>
		  </section>
		</div><!--/.nav-collapse -->
	  </div>
	</nav>
	
	<!-- WEB Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Options sample -->
			<section class="sidebar-options hidden-xs">
				<span class="sidebar-title">Opções</span>
				<ul>
					<li><a>Autenticação por Federação</a></li>
				</ul>
				<a class="helper">Ajuda</a>
			</section>
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container centered-container">
		
			<!-- Title -->
			<section class="title-section">
				<h4><a>U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><span class="red-link active">Autenticação</span></h4>
			</section>
		
			<!-- Main Body Section -->
			<section class="main-section login-auth">
					<h3>Autenticação</h3>
					<input class="auth-input" type="text" name="username" placeholder="Utilizador" />
					<input class="auth-input" type="password" name="password" placeholder="Palavra-Passe" />
					<input class="btn-auth" type="submit" name="init-session" value="iniciar sessão" />
					{!! Form::open(array('url' => '/auth/login', 'method' => 'POST')) !!}
						{!! Form::text('username','', array('class' => 'auth-input', 'placeholder' => 'Utilizador')) !!}
						{!! Form::password('password', array('class' => 'auth-input', 'placeholder' => 'Palavra-Passe')) !!}
						{!! Form::submit('iniciar sessão',array('class'=>'btn-auth'))!!}
                	{!! Form::close() !!}
					<a>Esqueceu-se da palavra-passe? Recupere</a>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section login-separator">
					<hr/>
					<p>OU</p>
					<hr/>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section">
					<h3>Entre através de rede social</h3>
					<section class="login-social-networks">
						<ul>
							<li><a><img src="../../src/imgs/fb_logo.png"></a></li>
							<li><a><img src="../../src/imgs/twitter_logo.png"></a></li>
							<li><a><img src="../../src/imgs/google_plus_logo.svg"></a></li>
							<li><a><img src="../../src/imgs/linkedin_logo.png"></a></li>
						</ul>
					</section>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section big-separator">
					<hr/>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section login-register">
					<h2>Registe os seus dados</h2>
					<section class="not-centered">
						{!! Form::open(array('url' => '/auth/register', 'method' => 'POST')) !!}
						{!! Form::label('nome', 'Nome completo', array('class' => 'required')) !!}
						{!! Form::text('nome','', array('class' => 'reg-input')) !!}
						{!! Form::label('numero_identificacao', 'Número do documento de identificação', array('class' => 'required')) !!}
						{!! Form::text('numero_identificacao','', array('class' => 'reg-input')) !!}
						{!! Form::label('email', 'E-mail eletrónico', array('class' => 'required')) !!}
						{!! Form::email('email','', array('class' => 'reg-input')) !!}
						{!! Form::label('password', 'Password',array('class' => 'required'))!!}
						{!! Form::password('password',array('class' => 'reg-input')) !!}
						{!! Form::label('password_confirmation', 'Confirmar password',array('class' => 'required'))!!}
						{!! Form::password('password_confirmation',array('class' => 'reg-input')) !!}
						{!! Form::label('nacionalidade', 'Nacionalidade', array('class' => 'required')) !!}
						<br/>
						{!! Form::select('nacionalidade',($paises),array('class' => 'reg-input')) !!}
						<br/>
						<br/>
						{!! Form::label('localidade', 'Localidade', array('class' => 'required')) !!}
						{!! Form::text('localidade','',array('class' => 'reg-input')) !!}
						{!! Form::label('data_nascimento', 'Data de nascimento', array('class' => 'required')) !!}
						{!! Form::date('data_nascimento','',array('class' => 'reg-input')) !!}
						{!! Form::label('carta_conducao', 'Carta de condução') !!}
						{!! Form::checkbox('carta_conducao', 'value',false,array('class' => 'reg-aligned')) !!}
							<ul class="reg-buttons">
								<li><input type="reset" name="reset_form" value="Limpar registo" /></li>
								<li>{!! Form::submit('Finalizar') !!}</li>
							</ul>
						{!! Form::close() !!}
					</section>
			</section>
		</section>
		<!-- END of Main Body-->
	</div>
	<!--END of WEB Body-->
	
	<!-- MOBILE Body -->
	<div class="container visible-xs">
		
		<!-- Main Body -->
		<section class="container centered-container">
		
			<!-- Title -->
			<section class="title-section">
				<h4><a>U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><span class="red-link active">Autenticação</span></h4>
			</section>
		
			<!-- Main Body Section -->
			<section class="main-section login-auth">
					<h3>Autenticação</h3>
					{!! Form::open(array('url' => '/auth/login', 'method' => 'POST')) !!}
						{!! Form::text('username','', array('class' => 'auth-input', 'placeholder' => 'Utilizador')) !!}
						{!! Form::password('password', array('class' => 'auth-input', 'placeholder' => 'Palavra-Passe')) !!}
						{!! Form::submit('iniciar sessão',array('class'=>'btn-auth'))!!}
                	{!! Form::close() !!}
					<a>Esqueceu-se da palavra-passe? Recupere</a>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section login-separator">
					<hr/>
					<p>OU</p>
					<hr/>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section">
					<h3>Entre através de rede social</h3>
					<section class="login-social-networks">
						<ul>
							<li><a><img src="../../src/imgs/fb_logo.png"></a></li>
							<li><a><img src="../../src/imgs/twitter_logo.png"></a></li>
							<li><a><img src="../../src/imgs/google_plus_logo.svg"></a></li>
							<li><a><img src="../../src/imgs/linkedin_logo.png"></a></li>
						</ul>
					</section>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section big-separator">
					<hr/>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section login-register">
					<h2>Registe os seus dados</h2>
					<section class="not-centered">
						{!! Form::open(array('url' => '/auth/register', 'method' => 'POST')) !!}
						{!! Form::label('nome', 'Nome completo', array('class' => 'required')) !!};
						{!! Form::text('nome','', array('class' => 'reg-input')) !!}
						{!! Form::label('numero_identificacao', 'Número do documento de identificação', array('class' => 'required')) !!};
						{!! Form::text('numero_identificacao','', array('class' => 'reg-input')) !!}
						{!! Form::label('email', 'E-mail eletrónico', array('class' => 'required')) !!};
						{!! Form::email('email','', array('class' => 'reg-input')) !!}
						{!! Form::label('nacionalidade', 'Nacionalidade', array('class' => 'required')) !!};
						{!! Form::select('nacionalidade',($paises),array('class' => 'reg-input')) !!}
						{!! Form::label('localidade', 'Localidade', array('class' => 'required')) !!};
						{!! Form::text('localidade','',array('class' => 'reg-input')) !!}
						{!! Form::label('data_nascimento', 'Data de nascimento', array('class' => 'required')) !!};
						{!! Form::date('data_nascimento','',array('class' => 'reg-input')) !!}
						{!! Form::label('carta_conducao', 'Carta de condução') !!};
						{!! Form::checkbox('carta_conducao', 'value',array('class' => 'reg-aligned')) !!}
							<ul class="reg-buttons">
								<li><input type="reset" name="reset_form" value="Limpar registo" /></li>
								<li><input type="submit" name="commit_register" value="Finalizar" /></li>
							</ul>
						{!! Form::close() !!}
					</section>
			</section>
		</section>
		<!-- END of Main Body-->
	</div>
	<!-- END of Mobile Body-->
	
	<!-- Footer -->
	<footer id="footer">
		<section class="container" id="container-footer">
			<span class="hidden-xs">Copyright 2016 &copy Universidade do Porto | Termos e Condições | Acessibilidade</span>
			<span class="hidden-xs">Última atualização: 2016-04-03 Página gerada em: 2016-04-03</span>
			<span class="visible-xs">Copyright 2016 &copy UP Solidária</span>
		</section>
	</footer>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="../../src/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../src/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

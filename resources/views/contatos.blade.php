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
	<link href="../public/src/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../public/src/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../public/src/css/upsolidaria.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../public/src/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>

  <body>
	
	<!-- Upper bar, contains authentication and language -->
	<nav class="navbar navbar-inverse navbar-little">
		<section class="auth hidden-xs">
			<section class="auth-left">
				<span id="auth-span">Autenticar-se</span>
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
			<li class="active"><a href="#contacts">contactos</a></li>
		  </ul>
		  <section class="search hidden-xs">
			<span id="search-icon" class="glyphicon glyphicon-search"></span>
		  </section>
		</div><!--/.nav-collapse -->
	  </div>
	</nav>
	
	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search sample -->
			<section class="hidden-xs"> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Pessoas" />
			</section>
			
			<!-- Options -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Outros Contatos</span>
				<ul>
					<li><a>Maria Clara Martins</a></li>
					<li><a>Manuel Nuno Alçada</a></li>					
					<li><a>Maria Teresa Proença</a></li>
					<li><a>Marianela Santos Silva</a></li>					
					<li><a>João Pereira da Silva</a></li>
				</ul>
			</section>
			
			<!-- Authentication -->
			<section class="hidden-xs">
				<span class="sidebar-title">autenticação</span>
				<input class="auth-input" type="text" name="username" placeholder="Utilizador" />
				<input class="auth-input" type="password" name="password" placeholder="Palavra-Passe" />
				<input class="btn-auth" type="submit" name="init-session" value="iniciar sessão" />
				<br><a>Registe os seus dados</a>
			</section>
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container hidden-xs">
			
			<!-- Title -->
			<section class="title-section hidden-xs">
				<h4><a>U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><a class="active">Contatos</a></h4>
			</section>
		
            <h3 class="title">Contatos</h3>
            
			<!-- Organization Section -->
			<section class="contacts-section">
				<section class="info-section contacts">
					<h5 class="strong">Morada:</h5>
					<p>Reitoria da Universidade do Porto</p>
                    <p>Praça de Gomes Teixeira</p>
                    <p>4099-002 Porto, Portugal</p>
				</section>
				<section class="info-section contacts">
					<h5 class="strong">Telefone:</h5>
					<p>(+351) 22 040 8210</p>
                    <h5 class="strong">E-mail:</h5>
                    <p>voluntariado.up@reit.up.pt</p>
				</section>
                <section class="info-section contacts">
					<h5 class="strong">Coordenador:</h5>
                    <span>Manuel José Carvalho</span>
				</section>
				<section class="info-section contacts">
					<h5 class="strong">Membros</h5>
                    <p>Maria Clara Martins (técnica superior)</p>
					<p>Manuel Nuno Alçada (docente)</p>
                    <p>Maria Teresa Campos Proença (docente)</p>
                    <p>Marianela Santos Silva (técnica superior)</p>
                    <p>João Pereira da Silva (estudante)</p>
				</section>
            </section>
        </section>
	</div>
	
	<section class="container" id="main-container-xs">
        <section class="title-section-xs visible-xs">
			<h4><a>U.Porto Voluntariado</a></h4>
			<span>/</span>
			<h4><a class="active">Contatos</a></h4>
		</section>
		
		<section class="main-container-xs visible-xs">
			<section class="main-title-section-xs">
				<h3 class="title">Contatos</h3>
			</section>
		</section>
        
        <section class="contacts-section visible-xs">
            <section class="info-section contacts">
                <h5 class="strong">Morada:</h5>
                <p>Reitoria da Universidade do Porto</p>
                <p>Praça de Gomes Teixeira</p>
                <p>4099-002 Porto, Portugal</p>
            </section>
            <section class="info-section contacts">
                <h5 class="strong">Telefone:</h5>
                <p>(+351) 22 040 8210</p>
                <h5 class="strong">E-mail:</h5>
                <p>voluntariado.up@reit.up.pt</p>
            </section>
            <section class="info-section contacts">
                <h5 class="strong">Coordenador:</h5>
                <span>Manuel José Carvalho</span>
            </section>
            <section class="info-section contacts">
                <h5 class="strong">Membros</h5>
                <p>Maria Clara Martins (técnica superior)</p>
                <p>Manuel Nuno Alçada (docente)</p>
                <p>Maria Teresa Campos Proença (docente)</p>
                <p>Marianela Santos Silva (técnica superior)</p>
                <p>João Pereira da Silva (estudante)</p>
            </section>
        </section>
    </section>
	
	<!-- Footer -->
	<footer id="footer">
		<hr class="visible-xs">
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

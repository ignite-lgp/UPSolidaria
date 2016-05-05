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
			<li class="active"><a href="#organizations">organizações</a></li>
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
	
	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search sample -->
			<section class="hidden-xs"> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Organizações" />
			</section>
			
			<!-- Options -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">G.A.S. Porto</span>
				<ul>
					<li><a>Estrutura</a></li>
					<li><a>O que fazem</a></li>					
					<li><a>Como fazem</a></li>
					<li><a>Formação</a></li>					
					<li><a>Mensagem do presidente</a></li>
				</ul>
			</section>
					
			<!-- Groups -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Grupos</span>
				<ul>
					<li><a>100 diferenças</a></li>
					<li><a>Futuros</a></li>					
					<li><a>Horizontes</a></li>
					<li><a>Abraço Amigo</a></li>
					<li><a>Rumos</a></li>
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
				<h4><a>Organizações</a></h4>
				<span>/</span>
				<h4><a class="active">G.A.S. Porto</a></h4>
			</section>
		
			<!-- Organization Section -->
			<section class="organization-section">
				<h3 class="title">Grupo de Ação Social do Porto</h3>
				<img class="img img-responsive org-img" src="../imgs/gas_porto.png">
				<section class="info-section">
						<h4 class="sidebar-title">Missão</h4>
						<p class="big">O G.A.S.Porto tem como missão ser uma Escola de Vida vocacionada para a Ajuda e Desenvolvimento Humano, contribuindo para um mundo melhor, com menos necessidades.</p>
				</section>
				<section class="info-section">
						<h4 class="sidebar-title">Visão</h4>
						<p class="big">Acreditamos num mundo com menos necessidades, menos pobre, mais solidário, igual e justo. Um mundo onde, através de exemplos de entrega e serviço, as pessoas possam ajudar de forma voluntária, contínua e integrada na sociedade.</p>
				</section>
				<section class="info-section">
						<h4 class="sidebar-title">Valores</h4>
						<p class="big">A nossa intervenção é multidisciplinar e desenvolve-se de forma profissional, sustentável e com espírito de equipa. Partindo de competências técnicas, focamo-nos na pessoa e no meio em que esta se insere. Seguimo-nos por valores reconhecidos pelas diversas escolas de pensamento, como essenciais à felicidade do ser humano: paz, liberdade, respeito, abertura, sensibilidade, caridade, alegria, complementados pelo necessário rigor, disciplina e justiça. Somos inspirados pelo exemplo de Jesus Cristo, na sua dedicação aos pobres, combate à injustiça e desigualdade e inspiração altruísta. Partindo da matriz criada na sua fundação em 2002, procuramos crescer e melhorar em comunidade, acumulando saber ao longo das gerações que constituem o grupo, acompanhado de abertura e diálogo às novas gerações.</p>
				</section>
      </section>
	</div>
	
	<section class="container" id="main-container-xs">
				<section class="organization-section visible-xs">
					<h3 class="title">Grupo de Ação Social do Porto</h3>
					<img class="img img-responsive org-img" src="../imgs/gas_porto.png">
					<section class="info-section">
							<h4 class="sidebar-title">Missão</h4>
							<p class="big">O G.A.S.Porto tem como missão ser uma Escola de Vida vocacionada para a Ajuda e Desenvolvimento Humano, contribuindo para um mundo melhor, com menos necessidades.</p>
					</section>
					<section class="info-section">
							<h4 class="sidebar-title">Visão</h4>
							<p class="big">Acreditamos num mundo com menos necessidades, menos pobre, mais solidário, igual e justo. Um mundo onde, através de exemplos de entrega e serviço, as pessoas possam ajudar de forma voluntária, contínua e integrada na sociedade.</p>
					</section>
					<section class="info-section">
							<h4 class="sidebar-title">Valores</h4>
							<p class="big">A nossa intervenção é multidisciplinar e desenvolve-se de forma profissional, sustentável e com espírito de equipa. Partindo de competências técnicas, focamo-nos na pessoa e no meio em que esta se insere. Seguimo-nos por valores reconhecidos pelas diversas escolas de pensamento, como essenciais à felicidade do ser humano: paz, liberdade, respeito, abertura, sensibilidade, caridade, alegria, complementados pelo necessário rigor, disciplina e justiça. Somos inspirados pelo exemplo de Jesus Cristo, na sua dedicação aos pobres, combate à injustiça e desigualdade e inspiração altruísta. Partindo da matriz criada na sua fundação em 2002, procuramos crescer e melhorar em comunidade, acumulando saber ao longo das gerações que constituem o grupo, acompanhado de abertura e diálogo às novas gerações.</p>
					</section>
      </section>
				
    </section>
	
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

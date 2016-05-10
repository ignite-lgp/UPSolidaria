<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="./src/imgs/logo_upsolidaria.png">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

	<title>UP Solidária</title>

	<!-- Bootstrap core CSS -->
	<link href="src/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="src/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="src/css/upsolidaria.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="src/js/ie-emulation-modes-warning.js"></script>

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
		  <a class="navbar-brand" href="./"><img src = "src/imgs/logo.png" id="logo"></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav navigation-options">
            <li><a href="./quemsomos">quem somos</a></li>
            <li><a href="./organizacoes">organizações</a></li>
            <li><a href="#activities">atividades</a></li>
            <li><a href="./noticia">notícias</a></li>
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
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar" />
			</section>
			
			<!-- Options sample -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Ligações Úteis</span>
				<ul>
					<li><a>Ser Voluntário na U.P.</a></li>
					<li><a>Juntar-se a uma organização</a></li>					
					<li><a>Contactar organização</a></li>
                    <li><a>Atividades do voluntariado</a></li>
				</ul>
			</section>
            
            <section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Documentos</span>
				<ul>
					<li><a>Princípios de Enquadramento de Voluntariado da U.Porto</a></li>
					<li><a class="red-link">Descarregar</a></li>
				</ul>
                <br>
                <ul>
                    <li><a>Despacho Reitoral</a></li>
					<li><a class="red-link">Descarregar</a></li>
                </ul>
			</section>
			
			<!-- Authentication sample -->
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
				<h4><a class="active">Quem Somos</a></h4>
			</section>
            
            <section class="main-container-xs hidden-xs">
                <section class="main-title-section-xs">
                    <h3 class="title">Quem Somos</h3>
                </section>
		    </section>
            
            <section class="img-section">
                <img class="img img-responsive" src="src/imgs/quemsomos.jpg">
            </section>
            
            <section class="text-section">
                <p>O voluntariado é uma atividade inerente ao exercício de cidadania que se traduz numa relação de solidariedade e de participação cívica individual e comunitária exercida de forma livre, responsável e organizada, tendo em vista a solução dos problemas que afetam alguns grupos sociais ou, mesmo, a sociedade em geral, conforme o consagra a <strong>Lei nº 71/98, de 3 de novembro</strong>, que estabeleceu as bases jurídicas do voluntariado.</p>
                <p>A U.Porto, consciente da sua responsabilidade social na promoção do bem comum e de uma maior justiça social, tem vindo a apoiar e a promover, centralmente e através das suas unidades orgânicas, diversas atividades de voluntariado em articulação com outras entidades directamente envolvidas no exercício consciente da solidariedade e da cidadania. Conforme definido nos "<strong>Princípios de Enquadramento de Voluntariado da U.Porto</strong>", esta pretende estimular a comunidade académica, muito especialmente os/as estudantes, a envolver-se em múltiplas atividades de voluntariado, em regime livre, generoso e totalmente voluntário.</p>
                <p>Para o enquadramento e articulação das ações de voluntariado, a U.Porto criou uma <strong>Comissão de Voluntariado</strong> que promoverá e divulgará junto da comunidade académica a prática do voluntariado, estabelecerá protocolos e acordos de cooperação com entidades especialmente vocacionadas para a ajuda humanitária, para o apoio a grupos sociais ou etários especialmente necessitados ou carenciados, para a promoção do sucesso escolar, da cultura e do desporto e, em geral, para o exercício da cidadania ativa e responsável da sua comunidade académica.</p>
                <p>Os programas de voluntariado reconhecidos pela U.Porto obedecerão aos princípios legais e éticos que lhe subjazem, podendo abarcar tanto atividades de curta duração associadas a objetivos específicos, como, desejavelmente, atividades mais duradouras, regulares ou contínuas, de acordo com as necessidades dos grupos sociais ou das áreas de intervenção dos voluntários e das entidades a que se venham a associar.</p>
                <p>Entende-se que o verdadeiro voluntariado deve ser exercido sem ser esperada qualquer Compensação em troca. Contudo, considera-se adequado que seja certificado, especialmente aos estudantes, o exercício de ações de voluntariado devidamente reconhecidas pela U.Porto, em particular através da devida menção no suplemento ao diploma, desde que cumpridos os critérios exigidos no Despacho Reitoral aplicável (<strong>Despacho Reitoral nº GR.03/02/2010</strong>).</p>
                <p><strong>Ser voluntário na U.Porto</strong> implica, quer para as entidades de acolhimento, quer para o voluntário, a assunção de um compromisso, de acordo com os princípios prosseguidos pela U.Porto.</p>
            </section>
        </section>

	</div>
	
	<section class="container" id="main-container-xs">
        
		<section class="title-section-xs visible-xs">
			<h4><a>U.Porto Voluntariado</a></h4>
			<span>/</span>
			<h4><a class="active">Quem Somos</a></h4>
		</section>
		
		<section class="main-container-xs visible-xs">
			<section class="main-title-section-xs">
				<h3 class="title">Quem Somos</h3>
			</section>
		</section>
        
        <section class="img-section visible-xs">
            <img class="img img-responsive" src="src/imgs/quemsomos.jpg">
        </section>
        
        <section class="text-section visible-xs">
            <p>O voluntariado é uma atividade inerente ao exercício de cidadania que se traduz numa relação de solidariedade e de participação cívica individual e comunitária exercida de forma livre, responsável e organizada, tendo em vista a solução dos problemas que afetam alguns grupos sociais ou, mesmo, a sociedade em geral, conforme o consagra a <strong>Lei nº 71/98, de 3 de novembro</strong>, que estabeleceu as bases jurídicas do voluntariado.</p>
            <p>A U.Porto, consciente da sua responsabilidade social na promoção do bem comum e de uma maior justiça social, tem vindo a apoiar e a promover, centralmente e através das suas unidades orgânicas, diversas atividades de voluntariado em articulação com outras entidades directamente envolvidas no exercício consciente da solidariedade e da cidadania. Conforme definido nos "<strong>Princípios de Enquadramento de Voluntariado da U.Porto</strong>", esta pretende estimular a comunidade académica, muito especialmente os/as estudantes, a envolver-se em múltiplas atividades de voluntariado, em regime livre, generoso e totalmente voluntário.</p>
            <p>Para o enquadramento e articulação das ações de voluntariado, a U.Porto criou uma <strong>Comissão de Voluntariado</strong> que promoverá e divulgará junto da comunidade académica a prática do voluntariado, estabelecerá protocolos e acordos de cooperação com entidades especialmente vocacionadas para a ajuda humanitária, para o apoio a grupos sociais ou etários especialmente necessitados ou carenciados, para a promoção do sucesso escolar, da cultura e do desporto e, em geral, para o exercício da cidadania ativa e responsável da sua comunidade académica.</p>
            <p>Os programas de voluntariado reconhecidos pela U.Porto obedecerão aos princípios legais e éticos que lhe subjazem, podendo abarcar tanto atividades de curta duração associadas a objetivos específicos, como, desejavelmente, atividades mais duradouras, regulares ou contínuas, de acordo com as necessidades dos grupos sociais ou das áreas de intervenção dos voluntários e das entidades a que se venham a associar.</p>
            <p>Entende-se que o verdadeiro voluntariado deve ser exercido sem ser esperada qualquer Compensação em troca. Contudo, considera-se adequado que seja certificado, especialmente aos estudantes, o exercício de ações de voluntariado devidamente reconhecidas pela U.Porto, em particular através da devida menção no suplemento ao diploma, desde que cumpridos os critérios exigidos no Despacho Reitoral aplicável (<strong>Despacho Reitoral nº GR.03/02/2010</strong>).</p>
            <p><strong>Ser voluntário na U.Porto</strong> implica, quer para as entidades de acolhimento, quer para o voluntário, a assunção de um compromisso, de acordo com os princípios prosseguidos pela U.Porto.</p>
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

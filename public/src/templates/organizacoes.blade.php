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
			
            <!-- Categories -->
			<section class="sidebar-categories hidden-xs">
				<span class="sidebar-title">categorias</span>
				<a>AJUDARIS</a>
				<a>Cura+</a>
				<a>S. C. Cruz IPSS</a>
				<a>MIACIS</a>
				<a>G.A.S. Porto</a>
				<a>U.Dream</a>
				<a>MOA de Portugal</a>
				<a>Banco Alimentar</a>
				<a>Intercultura-AFS</a>
				<a>G.A.S Africa</a>
				<a>Active cat</a>
				<a>MHNC-UP</a>
				<a>Leigos para o desenvolvimento</a>
				<a>Câmara Municipal do Porto</a>
				<a>Vo.U</a>
			</section>
            
			<!-- Interests -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Áreas de Interesse</span>
				<ul>
					<li><a>Ambiente</a></li>
					<li><a>Cidadania e Direitos</a></li>
                    <li><a>Ciência</a></li>
                    <li><a>Computadores e Tecnologia</a></li>
                    <li><a>Cultura e Artes</a></li>
                    <li><a>Desporto e Lazer</a></li>
                    <li><a>Educação</a></li>
                    <li><a>Desporto e Lazer</a></li>
                    <li><a>Engenharia</a></li>
                    <li><a>Inovação e Empreendedorismo</a></li>
                    <li><a>Saúde</a></li>
					<li><a>Solidariedade Social</a></li>
				</ul>
			</section>
            
            <!-- Interests -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Público Alvo</span>
				<ul>
					<li><a>Animais</a></li>
					<li><a>CPLP</a></li>
                    <li><a>Crianças</a></li>
                    <li><a>Deficientes</a></li>
                    <li><a>Desempregados</a></li>
                    <li><a>Doentes</a></li>
                    <li><a>Estudantes</a></li>
                    <li><a>Idosos</a></li>
                    <li><a>Jovens</a></li>
                    <li><a>Mães</a></li>
                    <li><a>Sem-abrigo</a></li>
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
				<h4><a class="active">Organizações</a></h4>
			</section>
            
            <h3 class="title">Organizações</h3>
            
            <div class="row org-row">
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/ajudaris.png">
					<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
				</div>
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/curamais.png">
					<span class="org-list-title">Associação Cura +</span>
				</div>

                <!-- Add the extra clearfix for only the required viewport -->
                <!--<div class="clearfix visible-xs-block"></div>-->

                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/afs.png">
					<span class="org-list-title">Associação Intercultural AFS</span>
				</div>
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/moa.png">
					<span class="org-list-title">Fundação MOA de Portugal</span>
				</div>
            </div>
			<div class="row org-row">
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/ajudaris.png">
					<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
				</div>
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/curamais.png">
					<span class="org-list-title">Associação Cura +</span>
				</div>

                <!-- Add the extra clearfix for only the required viewport -->
                <!--<div class="clearfix visible-xs-block"></div>-->

                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/afs.png">
					<span class="org-list-title">Associação Intercultural AFS</span>
				</div>
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/moa.png">
					<span class="org-list-title">Fundação MOA de Portugal</span>
				</div>
            </div>
			<div class="row org-row">
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/ajudaris.png">
					<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
				</div>
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/curamais.png">
					<span class="org-list-title">Associação Cura +</span>
				</div>

                <!-- Add the extra clearfix for only the required viewport -->
                <!--<div class="clearfix visible-xs-block"></div>-->

                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/afs.png">
					<span class="org-list-title">Associação Intercultural AFS</span>
				</div>
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/moa.png">
					<span class="org-list-title">Fundação MOA de Portugal</span>
				</div>
            </div>
			<div class="row org-row">
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/ajudaris.png">
					<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
				</div>
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/curamais.png">
					<span class="org-list-title">Associação Cura +</span>
				</div>

                <!-- Add the extra clearfix for only the required viewport -->
                <!--<div class="clearfix visible-xs-block"></div>-->

                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/afs.png">
					<span class="org-list-title">Associação Intercultural AFS</span>
				</div>
                <div class="col-xs-6 col-sm-3">
					<img class="img img-responsive org-list-img" src="../imgs/organizations/moa.png">
					<span class="org-list-title">Fundação MOA de Portugal</span>
				</div>
            </div>
			

	</div>
	
	<section class="container" id="main-container-xs">
		
		<section class="title-section-xs visible-xs">
			<h4><a>U.Porto Voluntariado</a></h4>
			<span>/</span>
			<h4><a class="active">Organizações</a></h4>
		</section>
		
		<section class="main-container-xs visible-xs">
			<section class="main-title-section-xs">
				<h3 class="title">Organizações</h3>
			</section>
		</section>
		
		<div class="row org-row visible-xs">
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/ajudaris.png">
				<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/curamais.png">
				<span class="org-list-title">Associação Cura +</span>
			</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block org-block"></div>

			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/afs.png">
				<span class="org-list-title">Associação Intercultural AFS</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/moa.png">
				<span class="org-list-title">Fundação MOA de Portugal</span>
			</div>
        </div>
		
		<div class="row org-row visible-xs">
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/ajudaris.png">
				<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/curamais.png">
				<span class="org-list-title">Associação Cura +</span>
			</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block org-block"></div>

			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/afs.png">
				<span class="org-list-title">Associação Intercultural AFS</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/moa.png">
				<span class="org-list-title">Fundação MOA de Portugal</span>
			</div>
        </div>
		
		<div class="row org-row visible-xs">
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/ajudaris.png">
				<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/curamais.png">
				<span class="org-list-title">Associação Cura +</span>
			</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block org-block"></div>

			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/afs.png">
				<span class="org-list-title">Associação Intercultural AFS</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/moa.png">
				<span class="org-list-title">Fundação MOA de Portugal</span>
			</div>
        </div>
		
		<div class="row org-row visible-xs">
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/ajudaris.png">
				<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/curamais.png">
				<span class="org-list-title">Associação Cura +</span>
			</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block org-block"></div>

			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/afs.png">
				<span class="org-list-title">Associação Intercultural AFS</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="../imgs/organizations/moa.png">
				<span class="org-list-title">Fundação MOA de Portugal</span>
			</div>
         </div>
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

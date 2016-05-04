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
	
	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search -->
			<section class="hidden-xs"> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Pessoa" />
			</section>
			
			<!-- Options -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Opções</span>
				<ul>
					<li><a>Ver lista voluntários</a></li>
					<li><a>Atribuir crachás</a></li>					
					<li><a>Ver horário</a></li>
                    <li><a>Reconhecimentos</a></li>
                    <li><a>Pedir certificados</a></li>
                    <li><a>Requerimentos</a></li>
				</ul>
			</section>
			
            <!-- My Organizations -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">As Minhas Organizações</span>
				<ul>
					<li><a>G.A.S. Porto</a></li>
					<li><a>Banco Alimentar</a></li>					
					<li><a>VO.U. Associação de Voluntariado Universitário</a></li>
                    <li><a>Free Hugs</a></li>
				</ul>
                <br>
                <ul>
                    <li>
                        <i class="glyphicon glyphicon-plus"></i>
                        <a>Criar organização</a>
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-paperclip"></i>
                        <a>Aderir a organização</a>
                    </li>
                </ul>
			</section>
            
			<!-- Events -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Eventos</span>
				<ul>
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Angariação de fundos</a>
					</li>
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Recolha de alimentos</a>
					</li>					
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Recolha do lixo da praia</a>
					</li>
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
				<h4><a>Conta</a></h4>
				<span>/</span>
				<h4><a class="active">Voluntário</a></h4>
			</section>
			
			<h3 class="title">Voluntário</h3>
			
			<section class="volunteer-basic-info">
				<div class="row volunteer-row">
					<div class="col-md-3 col-sm-6">
						<img class="img img-responsive volunteer-img" src="../imgs/volunteers/stevejobs.jpg">
					</div>
					
					<div class="col-md-8 col-sm-6">
						<h4 class="title-volunteer"><a>Steve Jobs</a></h4>
						
						<div class="volunteer-info">
							<span>Email:</span> 
							<a class="red-link">stevejobs@apple.com</a>
						</div>
						
						<div class="volunteer-info">
							<span>Estatuto:</span> 
							<span>Docente</span>
						</div>
						
						<div class="volunteer-info">
							<span>Localidade:</span> 
							<span>Póvoa do Varzim, Portugal</span>
						</div>
						
						<div class="volunteer-info">
							<span>Distrito:</span> 
							<span>Porto, Portugal</span>
						</div>
						
						<div class="volunteer-info">
							<span>Ano de inscrição no voluntariado:</span> 
							<span>2010</span>
						</div>
						
						<div class="volunteer-info">
							<span>Organização acolhedora:</span>
							<span>G.A.S. Porto</span>
						</div>
					</div>
				</div>
				
				<section class="small-info">
					<span class="dark-info">Nível:</span>
					<span class="light-red-info">64</span>
				</section>
				
				<section class="small-info">
					<span class="dark-info">Pontos:</span>
					<span class="light-red-info">1230</span>
					<span class="dark-info">/</span>
					<span class="dark-red-info">1340</span>
				</section>
				
				<section class="medium-info">
					<span class="medium-dark-info">Disponibilidade</span>
					<div class="round-rectangle">
						<span class="green-circle"></span>
					</div>
				</section>
				
				<section class="volunteer-menu visible-md visible-lg">
					<div class="row volunteer-menu-row">
						<div class="col-md-3 volunteer-menu-col">
							<span class="dark-info"><a>Organizações</a></span>
						</div>
						<div class="col-md-3 volunteer-menu-col">
							<span class="dark-info"><a>Atividades</a></span>
						</div>
						<div class="col-md-3 volunteer-menu-col">
							<span class="dark-info"><a>Crachás</a></span>
						</div>
						<div class="col-md-3 volunteer-menu-col active">
							<span class="dark-info"><a>Troféus</a></span>
						</div>
					</div>
				</section>
				
				<section class="volunteer-menu visible-sm">
					<div class="row volunteer-menu-row">
						<div class="col-sm-6 volunteer-menu-col">
							<span class="dark-info"><a>Organizações</a></span>
						</div>
						<div class="col-sm-6 volunteer-menu-col">
							<span class="dark-info"><a>Atividades</a></span>
						</div>
						<div class="col-sm-6 volunteer-menu-col">
							<span class="dark-info"><a>Crachás</a></span>
						</div>
						<div class="col-sm-6 volunteer-menu-col active">
							<span class="dark-info"><a>Troféus</a></span>
						</div>
					</div>
				</section>
				
				<section class="volunteer-menu-collectibles visible-md visible-lg">
					<div class="row volunteer-menu-row">
						<div class="col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/dedication.png">
							<div class="trophy">
								<span class="trophies capital strong">5 troféus</span>
								<br>
								<span class="trophies short">Dedicação</span>
							</div>
						</div>
						<div class="col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/kindness.png">
							<div class="trophy">
								<span class="trophies capital strong">8 troféus</span>
								<br>
								<span class="trophies short">Simpatia</span>
							</div>
						</div>
						<div class="col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/teamwork.png">
							<div class="trophy">
								<span class="trophies capital strong">4 troféus</span>
								<br>
								<span class="trophies short">Espiírito de Equipa</span>
							</div>
						</div>
						<div class="col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/creativity.png">
							<div class="trophy">
								<span class="trophies capital strong">4 troféus</span>
								<br>
								<span class="trophies short">Originalidade</span>
							</div>
						</div>
					</div>
					
					<div class="row volunteer-menu-row">
						<div class="col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/creativity.png">
							<div class="trophy">
								<span class="trophies capital strong">7 troféus</span>
								<br>
								<span class="trophies short">Competência</span>
							</div>
						</div>
					</div>
				</section>
				
				<section class="volunteer-menu-collectibles visible-sm">
					<div class="row volunteer-menu-row">
						<div class="col-sm-6 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/dedication.png">
							<div class="trophy">
								<span class="trophies capital strong">5 troféus</span>
								<br>
								<span class="trophies short">Dedicação</span>
							</div>
						</div>
						<div class="col-sm-6 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/kindness.png">
							<div class="trophy">
								<span class="trophies capital strong">8 troféus</span>
								<br>
								<span class="trophies short">Simpatia</span>
							</div>
						</div>
						<div class="clearfix visible-sm-block clearfix-small"></div>
						<div class="col-sm-6 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/teamwork.png">
							<div class="trophy">
								<span class="trophies capital strong">4 troféus</span>
								<br>
								<span class="trophies short">Espiírito de Equipa</span>
							</div>
						</div>
						<div class="col-sm-6 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/creativity.png">
							<div class="trophy">
								<span class="trophies capital strong">4 troféus</span>
								<br>
								<span class="trophies short">Originalidade</span>
							</div>
						</div>
					</div>
					
					<div class="row volunteer-menu-row">
						<div class="col-sm-6 volunteer-menu-col-collectibles blockfix-small">
							<img class="img img-responsive img-collectible" src="../imgs/trophies/creativity.png">
							<div class="trophy">
								<span class="trophies capital strong">7 troféus</span>
								<br>
								<span class="trophies short">Competência</span>
							</div>
						</div>
					</div>
				</section>
				
			</section>
	</div>
	
	<section class="container" id="main-container-xs">
		<section class="title-section-xs visible-xs">
			<h4><a>U.Porto Voluntariado</a></h4>
			<span>/</span>
			<h4><a>Conta</a></h4>
			<span>/</span>
			<h4><a class="active">Voluntário</a></h4>
		</section>
		
		<section class="main-container-xs visible-xs">
			<section class="main-title-section-xs">
				<h3 class="title">Steve Jobs</h3>
			</section>
		</section>
		
		<section class="volunteer-basic-info visible-xs">
			<div class="row volunteer-row-xs">
				<div class="col-xs-6 col-md-3">
					<img class="img img-responsive" src="../imgs/volunteers/stevejobs.jpg">
				</div>
				
				<div class="col-md-8">
					
					<div class="volunteer-info">
						<span>Email:</span> 
						<a class="red-link">stevejobs@apple.com</a>
					</div>
					
					<div class="volunteer-info">
						<span>Estatuto:</span> 
						<span>Docente</span>
					</div>
					
					<div class="volunteer-info">
						<span>Localidade:</span> 
						<span>Póvoa do Varzim, Portugal</span>
					</div>
					
					<div class="volunteer-info">
						<span>Distrito:</span> 
						<span>Porto, Portugal</span>
					</div>
				</div>
			</div>
		</section>
		<section class="visible-xs">
			
			<section class="small-info">
				<span class="dark-info">Nível:</span>
				<span class="light-red-info">64</span>
			</section>
			
			<section class="small-info">
				<span class="dark-info">Pontos:</span>
				<span class="light-red-info">1230</span>
				<span class="dark-info">/</span>
				<span class="dark-red-info">1340</span>
			</section>
			
			<section class="medium-info">
				<span class="medium-dark-info">Disponibilidade</span>
				<div class="round-rectangle">
					<span class="green-circle"></span>
				</div>
			</section>
			
			<section class="volunteer-menu">
				<div class="row volunteer-menu-row">
					<div class="col-xs-6 col-md-3 volunteer-menu-col">
						<span class="dark-info"><a>Organizações</a></span>
					</div>
					<div class="col-xs-6 col-md-3 volunteer-menu-col">
						<span class="dark-info"><a>Atividades</a></span>
					</div>
					<div class="clearfix visible-xs-block org-block"></div>
					<div class="col-xs-6 col-md-3 volunteer-menu-col">
						<span class="dark-info"><a>Crachás</a></span>
					</div>
					<div class="col-xs-6 col-md-3 volunteer-menu-col active">
						<span class="dark-info"><a>Troféus</a></span>
					</div>
				</div>
			</section>
			
			<section class="volunteer-menu-collectibles">
				<div class="row volunteer-menu-row">
					<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
						<img class="img img-responsive img-collectible" src="../imgs/trophies/dedication.png">
						<div class="trophy">
							<span class="trophies capital strong">5 troféus</span>
							<br>
							<span class="trophies short">Dedicação</span>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
						<img class="img img-responsive img-collectible" src="../imgs/trophies/kindness.png">
						<div class="trophy">
							<span class="trophies capital strong">8 troféus</span>
							<br>
							<span class="trophies short">Simpatia</span>
						</div>
					</div>
					<div class="clearfix visible-xs-block org-block"></div>
					<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
						<img class="img img-responsive img-collectible" src="../imgs/trophies/teamwork.png">
						<div class="trophy">
							<span class="trophies capital strong">4 troféus</span>
							<br>
							<span class="trophies short">Espiírito de Equipa</span>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
						<img class="img img-responsive img-collectible" src="../imgs/trophies/creativity.png">
						<div class="trophy">
							<span class="trophies capital strong">4 troféus</span>
							<br>
							<span class="trophies short">Originalidade</span>
						</div>
					</div>
				</div>
				
				<div class="row volunteer-menu-row">
					<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
						<img class="img img-responsive img-collectible" src="../imgs/trophies/creativity.png">
						<div class="trophy">
							<span class="trophies capital strong">7 troféus</span>
							<br>
							<span class="trophies short">Competência</span>
						</div>
					</div>
				</div>
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

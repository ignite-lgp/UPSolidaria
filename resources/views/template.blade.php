@extends('master')

@section('main_content')

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
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Atividades" />
			</section>
			
			<!-- Options sample -->
			<section class="sidebar-options hidden-xs">
				<span class="sidebar-title">Opções</span>
				<ul>
					<li><a>Opção 1</a></li>
					<li><a>Opção 2</a></li>					
					<li><a>Opção muito grande que ocupa toda a largura</a></li>
				</ul>
				<a>Ajuda</a>
			</section>
			
			<!-- Link sample -->
			<section class="hidden-xs">
				<a class="red-link">Red link</a><br>
				<a>Normal link</a>
			</section>
			
			<!-- Listing sample -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Links</span>
				<ul>
					<li><a>Opção 1</a></li>
					<li><a>Opção 2</a></li>					
					<li><a>Opção muito grande que ocupa toda a largura</a></li>
				</ul>
				<span>Opção fora da lista</span>
			</section>
			
			<!-- Authentication sample -->
			<section class="hidden-xs">
				<span class="sidebar-title">autenticação</span>
				<input class="auth-input" type="text" name="username" placeholder="Utilizador" />
				<input class="auth-input" type="password" name="password" placeholder="Palavra-Passe" />
				<input class="btn-auth" type="submit" name="init-session" value="iniciar sessão" />
				<br><a>Registe os seus dados</a>
			</section>
			
			<!-- Categories sample -->
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
				<a class="active">Active cat</a>
				<a>MHNC-UP</a>
				<a>Leigos para o desenvolvimento</a>
				<a>Câmara Municipal do Porto</a>
				<a>Vo.U</a>
			</section>
			
			<!-- Oportunities sample -->
			<section class="hidden-xs">
				<span class="sidebar-title">oportunidades</span>
				<ul>
					<li>Ponto Verde Open Inovation</li>
					<li><a class="red-link">Concursos | Até: 8 Abril, 2016</a></li>
				</ul>
				<hr>
				<ul>
					<li>Ciclo de debates: Integração de Portugal na União Europeia | 30anos, 10 debates...</li>
					<li><a class="red-link">Eventos | Até: 21 Março, 2016</a></li>
				</ul>
				<hr>
				<ul>
					<li>Oportunidades de Financiamento U.Porto | 2016-03-21</li>
					<li><a class="red-link">Concursos | Até: 8 Abril, 2016</a></li>
				</ul>
				<hr>
				<ul>
					<li>Passatempo | Mostra U.Porto 2016 no Instagram</li>
					<li class="red-link">Não é link | Até: 20 Março, 2016</li>
				</ul>
				<br><a class="red-link">Ver mais...</a>
			</section>
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container hidden-xs">
		
			<!-- Title -->
			<section class="title-section hidden-xs">
				<h4><a>U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><a class="active">Autenticação</a></h4>
			</section>
		
			<!-- New -->
			<section class="news-group">
				<article class="news">
					<section class="news-img">
						<img class="img-responsive" src="../../src/imgs/capa_voluntariado.jpg">
					</section>
					<section class="news-title-section">
						<h4 class="news-title-l">lorem ipsum</h4>
					</section>
					<section class="news-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</section>
					<section class="news-view-more">
						<span class="span-view-more"><a class="red-link">Ver mais...</a></span>
					</section>
				</article>
			</section>
		
		<section class="news-group">
			<article class="news">
				<section class="news-img">
					<img class="img-responsive" src="../../src/imgs/gas_porto.png">
				</section>
				<section class="news-title-section">
					<h4 class="news-title-l">lorem ipsum</h4>
				</section>
				<section class="news-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
				</section>
				<section class="news-view-more">
					<span class="span-view-more"><a class="red-link">Ver mais...</a></span>
				</section>
			</article>
		</section>

	</div>
	
	<section class="container" id="main-container-xs">
		<section class="main-container-xs visible-xs">
			<section class="main-title-section-xs">
				<h3 class="main-title-xs">Bem-vindos à plataforma de Voluntariado da UP!</h4>
			</section>
		</section>
		<section class="news-group-xs visible-xs">
			<article class="news">
				<section class="news-img">
					<img class="img-responsive news-img" src="../../src/imgs/up.jpg">
				</section>
				<section class="news-title">
					<h4 class="news-title-xs">lorem ipsum</h5>
				</section>
				<section class="news-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</section>
				<section class="news-view-more">
					<span class="span-view-more"><a class="red-link">Ver mais...</a></span>
					<hr>
				</section>
			</article>
			
			<article class="news">
				<section class="news-img">
					<img class="img-responsive news-img" src="../../src/imgs/capa_voluntariado.jpg">
				</section>
				<section class="news-title">
					<h4 class="news-title-xs">lorem ipsum</h5>
				</section>
				<section class="news-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</section>
				<section class="news-view-more">
					<span class="span-view-more"><a class="red-link">Ver mais...</a></span>
					<hr>
				</section>
			</article>
			
			<article class="news">
				<section class="news-img">
					<img class="img-responsive news-img" src="../../src/imgs/gas_porto.png">
				</section>
				<section class="news-title">
					<h4 class="news-title-xs">lorem ipsum</h5>
				</section>
				<section class="news-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</section>
				<section class="news-view-more">
					<span class="span-view-more"><a class="red-link">Ver mais...</a></span>
					<hr>
				</section>
			</article>
		</section>
	</section>

@stop
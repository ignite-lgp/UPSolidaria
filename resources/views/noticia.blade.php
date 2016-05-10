<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../imgs/logo_upsolidaria.png">
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
    
    <nav class="navbar navbar-inverse navigation-gradient navbar-margin">
      <div class="container" id="container-navbar">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><img src = "/src/imgs/logo.png" id="logo"></a>
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

    <div class="container hidden-xs" id="container-left">

		<section class="sidebar-left-longer">
			
			<section class="sidebar-search-bar hidden-xs"> 
				<span id="search-bar-title">pesquisar</span>
				<input id="search-bar-input" type="text" name="activities" placeholder="Pesquisar Notícia ou Tema" />
			</section>
			
			<section class="sidebar-categories hidden-xs">
				<span id="categories-title">categorias</span>
				<span>AJUDARIS</span>
				<span>Cura+</span>
				<span>S. C. Cruz IPSS</span>
				<span>MIACIS</span>
				<span>G.A.S. Porto</span>
				<span>U.Dream</span>
				<span>MOA de Portugal</span>
				<span>Banco Alimentar</span>
				<span>Intercultura-AFS</span>
				<span>G.A.S Africa</span>
				<span>MOVE</span>
				<span>MHNC-UP</span>
				<span>Leigos para o desenvolvimento</span>
				<span>Câmara Municipal do Porto</span>
				<span>Vo.U</span>
				<span>Casa Museu Abel Salazar</span>
				<span>CDUP</span>
				<span>Mundo a Sorrir</span>
				<span>NASA</span>
				<span>Free Hugs</span>
				<span>Cidade Mais+</span>
				<span>FAP no Bairro</span>
				<span>UCC Boavista</span>
				<span>MIDAS</span>
				<span>Casa Ronald McDonald do Porto</span>
			</section>
            
            <section class="sidebar-oportunities hidden-xs">
				<span id="oportunities-title">oportunidades</span>
				<ul class="oportunity">
                    <li>Ponto Verde</li>
                    <li>Concursos | Até: 8 Abril, 2016</li>
                </ul>
                <hr class="oportunity-line">
                <ul class="oportunity">
                    <li>Ciclo de debates: Integração de Portugal na União Europeia | 30anos, 10 debates...</li>
                    <li>Eventos | Até: 21 Março, 2016</li>
                </ul>
                <hr class="oportunity-line">
                <ul class="oportunity">
                    <li>Oportunidades de Financiamento U.Porto | 2016-03-21</li>
                    <li>Concursos | Até: 8 Abril, 2016</li>
                </ul>
                <hr class="oportunity-line">
                <ul class="oportunity">
                    <li>Passatempo | Mostra U.Porto 2016 no Instagram</li>
                    <li>Concursos | Até: 20 Março, 2016</li>
                </ul>
			</section>
        
			
			<section class="sidebar-auth hidden-xs">
				<span id="authentication-title">autenticação</span>
				<input class="auth-input" type="text" name="username" placeholder="Utilizador" />
				<input class="auth-input" type="password" name="password" placeholder="Palavra-Passe" />
				<input class="btn-auth" type="submit" name="init-session" value="iniciar sessão" />
			</section>
			
			<section class="reg-data hidden-xs">
				<span id="span-bold">Registe os seus dados</span>
			</section>
		
		</section>
		
		<section class="main-container main-container-longer hidden-xs">
			<section class="main-title-section hidden-xs">
                <h4 class="main-title-link">U.Porto Voluntariado</h3>
                <span class="slash">/</span>
                <h4 class="other-title">Notícias</h4>
                <span class="slash">/</span>
                <h4 class="other-title">Voluntariado atinge números recorde na U.Porto</h4>
			</section>
            
            <section class="news-section">
                <section class="news-header">
                    <h3 class="news-header-title">Voluntariado atinge números recorde na U.Porto</h3>
                    <section class="news-authors-date">
                        <span class="news-authors">Marta Novo / Jennifer Moleiro / REIT</span>
                        <span class="news-date">Terça-feira, 23 de Março, 2016</span>
                    </section>
                </section>
                <section class="news-group-longer">
                     <article class="news-longer">
                        <section class="news-img">
                            <img class="img-responsive" src="../imgs/voluntariado_up.jpg">
                        </section>
                        <section class="news-text">
                            <p>Ao longo do ano letivo 2011/2012, 1341 pessoas, a grande maioria das quais estudantes, responderam ao desafio colocado pela Comissão de Voluntariado da U.Porto: ajudar
                            a transformar a sociedade com ações concretas de voluntariado, que passaram desde a participação em missões humanitárias em África ou a atividades de promoção do sucesso escolar em escolas portuenses. Os números, divulgados na última edição do Dossiê de Voluntariado na U.Porto, traduzem a forte aposta feita pela Universidade nos últimos anos ao nível da promoção do Voluntariado junto da comunidade académica.</p>
                            <p>As atividades de voluntariado promovidas diretamente pela U.Porto mobilizaram um total de 233 voluntários em projetos como o Voluntariado Estudantil Tutorial, projeto de combate ao abandono escolar no ensino básico e secundário na cidade do Porto, ou na produção de informação acessível para estudantes com deficiência. </p> 
                            <p>Ao nível das faculdades, o trabalho desenvolvido pelo GEV – Grupo de Estudantes Voluntários da FDUP,GIVE – Grupo de Intervenção, Voluntariado e Envolvimento (FPCEUP) e EXUP – Experience Upgrade Program (FEP) envolveu 323 pessoas, em atividades que vão desde a promoção do sucesso académico e o apoio escolar à oferta de consultoria de de gestão gratuita a IPSS ou ONG’s.</p>
                            <p>No entanto, a maior fatia do voluntariado realizado na U.Porto é feita através dos grupos associados: FEP Solidária; G.A.S.Porto – Grupo de Ação Social do Porto; EPDAH – Engenharia para o Desenvolvimento e Assistência Humanitária; NASA – Núcleo de Ação Social da AEFFUP; e a VO.U. – Associação de voluntariado Universitário. No total, foram 785 voluntários a participar nos diferentes projetos dos grupos associados, incluindo a participação em missões humanitárias em Cabo Verde, Moçambique e Timor-Leste.</p>
                            <p>A pensar em todos aqueles que trabalham em prol da transformação social, este ano foi ainda criado o Prémio da Cidadania Ativa, que pretende promover a intervenção social dos estudantes da Universidade do Porto e premiar o mérito dos seus projetos extracurriculares em áreas da cidadania. O Prémio de Cidadania Ativa vai distinguir os estudantes (ou antigos estudantes que tenham terminado a sua formação no ano anterior ao da atribuição do prémio) por projetos que empreendam, em quatro diferentes vetores de cidadania: a solidariedade; o empreendedorismo; a pedagogia e na promoção do desporto ou ambiente.</p>
                        </section>
                        <section class="news-social-networks">
                            <span class="news-social-networks-span">Partilhar:</span>
                            <ul class="social-networks">
                                <li><img src="/src/imgs/fb_logo.png"></li>
                                <li><img src="/src/imgs/twitter_logo.png"></li>
                                <li><img src="/src/imgs/google_plus_logo.svg"></li>
                                <li><img src="/src/imgs/linkedin_logo.png"></li>
                            </ul>
                        </section>
                     </article>
                </section>
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
                    <img class="img-responsive news-img" src="../imgs/up.jpg">
                </section>
                <section class="news-title">
                    <h4 class="news-title-xs">lorem ipsum</h5>
                </section>
                <section class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </section>
                <section class="news-view-more">
                    <span class="red-text span-view-more">Ver mais...</span>
                    <hr>
                </section>
            </article>
            
            <article class="news">
                <section class="news-img">
                    <img class="img-responsive news-img" src="/src/imgs/capa_voluntariado.jpg">
                </section>
                <section class="news-title">
                    <h4 class="news-title-xs">lorem ipsum</h5>
                </section>
                <section class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </section>
                <section class="news-view-more">
                    <span class="red-text span-view-more">Ver mais...</span>
                    <hr>
                </section>
            </article>
            
            <article class="news">
                <section class="news-img">
                    <img class="img-responsive news-img" src="/src/imgs/gas_porto.png">
                </section>
                <section class="news-title">
                    <h4 class="news-title-xs">lorem ipsum</h5>
                </section>
                <section class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </section>
                <section class="news-view-more">
                    <span class="red-text span-view-more">Ver mais...</span>
                    <hr>
                </section>
            </article>
        </section>
    </section>
    
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
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/src/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/src/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

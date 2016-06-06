
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

	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>

    <title>UP Solidária</title>



    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/upsolidaria.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">



  </head>

	<body>

	<nav class="navbar navbar-inverse navbar-little">
			<section class="auth hidden-xs">
					<section class="auth-left">
							<span id="auth-span"><a href="/auth">Autenticar-se</a></span>
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
				<a class="navbar-brand" href="./"><img src = "../imgs/logo.png" id="logo"></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navigation-options">
					<li><a href="/quemsomos">quem somos</a></li>
					<li><a href="/organizacoes">organizações</a></li>
					<li><a href="/atividades">atividades</a></li>
					<li><a href="/noticias">notícias</a></li>
					<li><a href="/contatos">contactos</a></li>
				</ul>
		<section class="search hidden-xs">
		<span id="search-icon" class="glyphicon glyphicon-search"></span>
		</section>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container hidden-xs" id="container-left">

		<section class="sidebar-left">
			<section>
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar  Notícia ou Tema" />
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">publicações</span>
				<ul>
					<li><a>Escrever nova notícia</a></li>
					<li><a>Ver todas as publicações</a></li>
				</ul>
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">registos</span>
				<ul>
					<li><a class="red-link">Ver registo de voluntários</a></li>
					<li><a>Ver registo de organizações</a></li>
					<li><a>Validar pedidos de registo</a></li>
				</ul>
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">medalhas e troféus</span>
				<ul>
					<li><a>Ver listagem de medalhas</a></li>
					<li><a>Ver listagem de troféus</a></li>
				</ul>
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">estatísticas de atividades</span>
				<ul>
					<li><a>Visualizações</a></li>
					<li><a>Número de voluntários</a></li>
					<li><a>Número de organizações</a></li>
					<li><a>Posts enviados</a></li>
				</ul>
			</section>
		</section>

		<section class="main-container dropdown">
			<section class="title-section">
				<h4><a>U.Porto Voluntariado</a></h3>
				<span>/</span>
				<h4><a>Registo</a></h4>
				<span>/</span>
				<h4><a class="active">Voluntários</a></h4>
			</section>

			<section class="main-section listing-navigation">
        <section class="navigation-admin">
          <div class="dropdown dropdown-menus-left">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="glyphicon glyphicon-stop"></i>
            </button>
            <ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1">

            </ul>
          </div>

          <div class="dropdown dropdown-menus-left lefting-div">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="glyphicon glyphicon-bookmark"></i>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1">

            </ul>
          </div>

          <div class="publish">
              <span>Publicar</span>
          </div>

          <div class="trash-publish">
              <i class="glyphicon glyphicon-trash"></i>
          </div>

          <div class="dropdown dropdown-menus-right" id="menu-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">10
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1">
                <li><a href="#">10</a></li>
                <li><a href="#">25</a></li>
                <li><a href="#">50</a></li>
            </ul>
          </div>

          <div class="pagination">
              <div class="pagination-div"><i class="glyphicon glyphicon-menu-left"></i></div>
              <div class="pagination-div"><span>1</span></div>
              <div class="pagination-div"><i class="glyphicon glyphicon-menu-right"></i></div>
          </div>

          <div class="pagination-range">
              <div class="pagination-div-range"><span>1-17</span></div>
          </div>
        </section>


        <section class="listing-requests">
            <article class="listing-request">
                <div class="select-request"></div>
                <div class="info-request">
                    <span class="name-request">Voluntariado atinge números recorde na U.Porto</span>
                    <span class="small-info-request">Editar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Visualizar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Eliminar</span>
                </div>
                <div class="date-request">
                  <span>02-05-2015</span>
                </div>
                <div class="trophies-request">
                    <i class="glyphicon glyphicon-thumbs-up"></i>
                    <span class="trophies-number">12</span>
                </div>
                <div class="person-publication">
                    <span>Jennifer Moleiro<span>
                </div>
            </article>
            <hr class="rule-request">
            <article class="listing-request">
                <div class="select-request"></div>
                <div class="info-request">
                    <span class="name-request">Voluntariado atinge números recorde na U.Porto</span>
                    <span class="small-info-request">Editar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Visualizar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Eliminar</span>
                </div>
                <div class="date-request">
                  <span>02-05-2015</span>
                </div>
                <div class="trophies-request">
                    <i class="glyphicon glyphicon-thumbs-up"></i>
                    <span class="trophies-number">12</span>
                </div>
                <div class="person-publication">
                    <span>Jennifer Moleiro<span>
                </div>
            </article>
            <hr class="rule-request">
            <article class="listing-request">
                <div class="select-request"></div>
                <div class="info-request">
                    <span class="name-request">Voluntariado atinge números recorde na U.Porto</span>
                    <span class="small-info-request">Editar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Visualizar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Eliminar</span>
                </div>
                <div class="date-request">
                  <span>02-05-2015</span>
                </div>
                <div class="trophies-request">
                    <i class="glyphicon glyphicon-thumbs-up"></i>
                    <span class="trophies-number">12</span>
                </div>
                <div class="person-publication">
                    <span>Jennifer Moleiro<span>
                </div>
            </article>
            <hr class="rule-request">
            <article class="listing-request">
                <div class="select-request"></div>
                <div class="info-request">
                    <span class="name-request">Voluntariado atinge números recorde na U.Porto</span>
                    <span class="small-info-request">Editar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Visualizar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Eliminar</span>
                </div>
                <div class="date-request">
                  <span>02-05-2015</span>
                </div>
                <div class="trophies-request">
                    <i class="glyphicon glyphicon-thumbs-up"></i>
                    <span class="trophies-number">12</span>
                </div>
                <div class="person-publication">
                    <span>Jennifer Moleiro<span>
                </div>
            </article>
            <hr class="rule-request">
            <article class="listing-request">
                <div class="select-request"></div>
                <div class="info-request">
                    <span class="name-request">Voluntariado atinge números recorde na U.Porto</span>
                    <span class="small-info-request">Editar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Visualizar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Eliminar</span>
                </div>
                <div class="date-request">
                  <span>02-05-2015</span>
                </div>
                <div class="trophies-request">
                    <i class="glyphicon glyphicon-thumbs-up"></i>
                    <span class="trophies-number">12</span>
                </div>
                <div class="person-publication">
                    <span>Jennifer Moleiro<span>
                </div>
            </article>
        </section>

			</section>


	</div>

	<section class="container" id="main-container-xs">
		<section class="main-container-xs visible-xs">
			<section class="main-title-section-xs">
				<h3 class="main-title-xs"></h3>
			</section>
		</section>
		<section class="news-group-xs visible-xs">
			<article class="news">
				<section class="news-img">
					<img class="img-responsive news-img" src="../imgs/up.jpg">
				</section>
				<section class="news-title">
					<h4 class="news-title-xs"></h4>
				</section>
				<section class="news-text">

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
  <script>window.jQuery || document.write('<script src="../../resources/assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../js/ie10-viewport-bug-workaround.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

   <script type="text/javascript">
   $(function() {
   $("#auto").autocomplete({
          minLength: 2,
        source: './search/autocomplete',
        select: function(event, ui) {
              $("#auto").val(ui.item.value);
        }});
   });
   </script>
  </body>
</html>

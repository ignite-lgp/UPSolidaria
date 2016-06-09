@extends('master')

@section('main_content')
  
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
					<li><a>Ver registo de voluntários</a></li>
					<li><a>Ver registo de organizações</a></li>
					<li><a class="red-link">Validar pedidos de registo</a></li>
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
				<h4><a class="active">Validar</a></h4>
			</section>

			<section class="main-section listing-navigation">
        <section class="navigation-admin">
          <div class="dropdown dropdown-menus-left">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="glyphicon glyphicon-bookmark"></i>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1">

            </ul>
          </div>

          <div class="dropdown dropdown-menus-left">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Ordenar por
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1">
                <li><a href="#"><i class="glyphicon glyphicon-stop order-by-i"></i>Mais recentes</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-stop order-by-i"></i>Mais antigos</a></li>
            </ul>
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
              <div class="pagination-div-range"><span>1-3</span></div>
          </div>
        </section>


        <section class="listing-requests">
            <article class="listing-request">
                <div class="info-request">
                    <span class="name-request">Pedro Machado</span>
                    <span class="small-info-request">Visualizar dados</span>
                </div>
                <div class="reject-request">
                    <i class="glyphicon glyphicon-remove-circle red-remove"></i>
                    <span>Rejeitar</span>
                </div>
                <div class="validate-request">
                  <i class="glyphicon glyphicon-ok-circle green-ok"></i>
                  <span>Validar</span>
                </div>
            </article>
            <hr class="rule-request">
            <article class="listing-request">
                <div class="info-request">
                    <span class="name-request">Rui Costa</span>
                    <span class="small-info-request">Visualizar dados</span>
                </div>
                <div class="reject-request">
                    <i class="glyphicon glyphicon-remove-circle red-remove"></i>
                    <span>Rejeitar</span>
                </div>
                <div class="validate-request">
                  <i class="glyphicon glyphicon-ok-circle green-ok"></i>
                  <span>Validar</span>
                </div>
            </article>
            <hr class="rule-request">
            <article class="listing-request">
                <div class="info-request">
                    <span class="name-request">Gonçalo Cabral</span>
                    <span class="small-info-request">Visualizar dados</span>
                </div>
                <div class="reject-request">
                    <i class="glyphicon glyphicon-remove-circle red-remove"></i>
                    <span>Rejeitar</span>
                </div>
                <div class="validate-request">
                  <i class="glyphicon glyphicon-ok-circle green-ok"></i>
                  <span>Validar</span>
                </div>
            </article>
            <hr class="rule-request">
            <article class="listing-request">
                <div class="info-request">
                    <span class="name-request">Tomás Pedrosa</span>
                    <span class="small-info-request">Visualizar dados</span>
                </div>
                <div class="reject-request">
                    <i class="glyphicon glyphicon-remove-circle red-remove"></i>
                    <span>Rejeitar</span>
                </div>
                <div class="validate-request">
                  <i class="glyphicon glyphicon-ok-circle green-ok"></i>
                  <span>Validar</span>
                </div>
            </article>
            <hr class="rule-request">
            <article class="listing-request">
                <div class="info-request">
                    <span class="name-request">Leonor Ferreira</span>
                    <span class="small-info-request">Visualizar dados</span>
                </div>
                <div class="reject-request">
                    <i class="glyphicon glyphicon-remove-circle red-remove"></i>
                    <span>Rejeitar</span>
                </div>
                <div class="validate-request">
                  <i class="glyphicon glyphicon-ok-circle green-ok"></i>
                  <span>Validar</span>
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

@stop
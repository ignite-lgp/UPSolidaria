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
					<li><a class="red-link">Ver todas as publicações</a></li>
				</ul>
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">registos</span>
				<ul>
					<li><a>Ver registo de voluntários</a></li>
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
				<h4><a>Publicações</a></h4>
				<span>/</span>
				<h4><a class="active">Todas as publicações</a></h4>
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
              <div class="pagination-div"><a href="{{ $noticias->previousPageUrl() }}"><i class="glyphicon glyphicon-menu-left"></i></a></div>
              <div class="pagination-div"><span>{{ $noticias->currentPage() }}</span></div>
              <div class="pagination-div"><a href="{{ $noticias->nextPageUrl() }}"><i class="glyphicon glyphicon-menu-right"></i></a></div>
			  <!--{!! $noticias->render() !!}-->
          </div>
        </section>

        <section class="listing-requests">
            @foreach ($noticias as $noticia)
            <article class="listing-request">
                <div class="select-request"></div>
                <div class="info-request">
                    <span class="name-request">{{ $noticia->title }}</span>
                    <span class="small-info-request">Editar</span>
                    <span class="small-info-request">|</span>
                    <span class="small-info-request">Visualizar</span>
                    <span class="small-info-request">|</span>
					<span class="small-info-request">Eliminar</span>
                </div>
                <div class="date-request">
                  <span>{{ $noticia->date }}</span>
                </div>
                <div class="trophies-request">
					{{ Form::open(['route' => ['DeleteNews.route', $noticia->id], 'method' => 'delete']) }}
                    {{ Form::button ('<i class="glyphicon glyphicon-remove"></i>', array('type' => 'submit', 'class' => 'btndel'))}}
					{{ Form::close() }}
                </div>
                <div class="person-publication">
                    <span>Comissão de Voluntariado da UP<span>
                </div>
            </article>
				@if ($noticia != end($noticias))
				<hr class="rule-request">
				@endif
			@endforeach
			{!! $noticias->render() !!}
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
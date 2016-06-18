@extends('master')

@section('title')
	<title>Registo de Organizações</title>
@stop

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
					<li><a href="/criar_noticia">Escrever nova notícia</a></li>
					<li><a href="/ver_noticias">Ver todas as publicações</a></li>
				</ul>
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">registos</span>
				<ul>
					<li><a href="/ver_registos">Ver registo de voluntários</a></li>
					<li><a class="red-link" href="/ver_oregistos">Ver registo de organizações</a></li>
					<li><a href="/validar_pedidos">Validar pedidos de registo</a></li>
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
				<h4><a href="/">U.Porto Voluntariado</a></h3>
				<span>/</span>
				<h4><a>Administrador</a></h4>
				<span>/</span>
				<h4><a class="active">Registo de Organizações</a></h4>
			</section>

			<section class="main-section listing-navigation">
				<section class="navigation-admin">
					<div class="dropdown dropdown-menus-left">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<i class="glyphicon glyphicon-bookmark"></i>
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1"></ul>
					</div>

					<div class="dropdown dropdown-menus-left">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Ordenar por
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1">
							<li><a href="#"><i class="glyphicon glyphicon-stop order-by-i"></i>Mais recentes</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-stop order-by-i"></i>Mais antigos</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-stop order-by-i"></i>Organização</a></li>
						</ul>
					</div>

					<div class="pagination">
						<a href="{{ $orgs->previousPageUrl() }}"><div class="pagination-div"><i class="glyphicon glyphicon-menu-left"></i></div></a>
						<div class="pagination-div"><span>{{ $orgs->currentPage() }}</span></div>
						<a href="{{ $orgs->nextPageUrl() }}"><div class="pagination-div"><i class="glyphicon glyphicon-menu-right"></i></div></a>
					</div>

					<div class="pagination-range">
						<div class="pagination-div-range"><span>{{ $orgs->currentPage() }}-{{ $orgs->lastPage() }}</span></div>
					</div>
				</section>

				<section class="listing-requests">
					<?php $i=0 ?>
					@foreach ($orgs as $voluntario)
						<article class="listing-request">
							<div class="info-request">
								<span class="name-request">{{ $voluntario->name }}</span>
								<a href="#"><span class="small-info-request">Visualizar perfil</span></a>
							</div>
							<div class="trophies-request">
								{{ Form::open(['route' => ['DeleteVolunteer.route', $voluntario->id], 'method' => 'delete']) }}
								{{ Form::button ('', array('type' => 'submit', 'class' => 'btn glyphicon glyphicon-remove'))}}
								{{ Form::close() }}
							</div>
							<div class="date-request">
								<span>Desde {{ $voluntario->confirm_date }}</span>
							</div>
						</article>
						<?php $i++ ?>
						@if ($i < count($orgs))<hr class="rule-request">@endif
					@endforeach
				</section>
			</section>
		</section>
	</div>

	<div class="container mobile-container visible-xs">

		<section class="sidebar-left sidebar-left-xs" style="display: none;">
			<section>
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar  Notícia ou Tema" />
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">publicações</span>
				<ul>
					<li><a href="/criar_noticia">Escrever nova notícia</a></li>
					<li><a href="/ver_noticias">Ver todas as publicações</a></li>
				</ul>
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">registos</span>
				<ul>
					<li><a href="/ver_registos">Ver registo de voluntários</a></li>
					<li><a class="red-link" href="/ver_oregistos">Ver registo de organizações</a></li>
					<li><a href="/validar_pedidos">Validar pedidos de registo</a></li>
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

		<section class="container dropdown">
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h3>
				<span>/</span>
				<h4><a>Administrador</a></h4>
				<span>/</span>
				<h4><a class="active">Registo de Organizações</a></h4>
			</section>

			<section class="main-section listing-navigation">
				<section class="navigation-admin">
					<div class="dropdown dropdown-menus-left">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<i class="glyphicon glyphicon-bookmark"></i>
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1"></ul>
					</div>

					<div class="dropdown dropdown-menus-left">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Ordenar por
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" id="order-by" aria-labelledby="dropdownMenu1">
							<li><a href="#"><i class="glyphicon glyphicon-stop order-by-i"></i>Mais recentes</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-stop order-by-i"></i>Mais antigos</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-stop order-by-i"></i>Organização</a></li>
						</ul>
					</div>

					<div class="pagination">
						<a href="{{ $orgs->previousPageUrl() }}"><div class="pagination-div"><i class="glyphicon glyphicon-menu-left"></i></div></a>
						<div class="pagination-div"><span>{{ $orgs->currentPage() }}</span></div>
						<a href="{{ $orgs->nextPageUrl() }}"><div class="pagination-div"><i class="glyphicon glyphicon-menu-right"></i></div></a>
					</div>

					<div class="pagination-range">
						<div class="pagination-div-range"><span>{{ $orgs->currentPage() }}-{{ $orgs->lastPage() }}</span></div>
					</div>
				</section>

				<section class="listing-requests">
					<?php $i=0 ?>
					@foreach ($orgs as $voluntario)
						<article class="listing-request">
							<div class="info-request">
								<span class="name-request">{{ $voluntario->name }}</span>
								<a href="#"><span class="small-info-request">Visualizar perfil</span></a>
							</div>
							<div class="trophies-request">
								{{ Form::open(['route' => ['DeleteVolunteer.route', $voluntario->id], 'method' => 'delete']) }}
								{{ Form::button ('', array('type' => 'submit', 'class' => 'btn glyphicon glyphicon-remove'))}}
								{{ Form::close() }}
							</div>
							<div class="date-request">
								<span>Desde {{ $voluntario->confirm_date }}</span>
							</div>
						</article>
						<?php $i++ ?>
						@if ($i < count($orgs))<hr class="rule-request">@endif
					@endforeach
				</section>
			</section>
		</section>
	</div>
	
@stop
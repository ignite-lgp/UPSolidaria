@extends('master')

@section('title')
	<title>Criar Notícia</title>
@stop

@section('main_content')

	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			<section>
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar  Notícia ou Tema" />
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">publicações</span>
				<ul>
					<li><a class="red-link" href="/criar_noticia">Escrever nova notícia</a></li>
					<li><a href="/ver_noticias">Ver todas as publicações</a></li>
				</ul>
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">registos</span>
				<ul>
					<li><a href="/ver_registos">Ver registo de voluntários</a></li>
					<li><a href="/ver_oregistos">Ver registo de organizações</a></li>
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
			
			@include('partials/auth')
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container">
			
			<!-- Title -->
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><a>Administrador</a></h4>
				<span>/</span>
				<h4><a class="active">Criar Notícia</a></h4>
			</section>
			
			<section class="main-section">
				<h3>Criar Notícia</h3>
     		</section>
			
			<section class="main-section">
				{!! Form::open(array('url' => '/createNews', 'method' => 'POST', 'files'=>true)) !!}
					<section class="create-new-field">
						<h4>Título</h4> 
						{!! Form::text('title')!!}
					</section>
					<section class="create-new-field">
						<h4>Imagem</h4>
						{!! Form::file('image') !!}
					</section>
					<section class="create-new-field">
						<h4>Descrição</h4>
						{!! Form::textarea('description','', array('placeholder' => 'Escreva aqui o corpo da notícia')) !!}
					</section>
					{!! Form::submit('Criar notícia',array('class'=>'btn-auth'))!!}
				{!! Form::close() !!}
			</section>
			
		</section>
	</div>
	
	
	<!-- Mobile Body -->
	<div class="container mobile-container visible-xs">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left sidebar-left-xs" style="display: none;">
			<section>
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar  Notícia ou Tema" />
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">publicações</span>
				<ul>
					<li><a class="red-link" href="/criar_noticia">Escrever nova notícia</a></li>
					<li><a href="/ver_noticias">Ver todas as publicações</a></li>
				</ul>
			</section>

			<section class="sidebar-listing">
				<span class="sidebar-title">registos</span>
				<ul>
					<li><a href="/ver_registos">Ver registo de voluntários</a></li>
					<li><a href="/ver_oregistos">Ver registo de organizações</a></li>
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
			
			@include('partials/auth')
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="container">
			
			<!-- Title -->
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><a>Administrador</a></h4>
				<span>/</span>
				<h4><a class="active">Criar Notícia</a></h4>
			</section>
			
			<section class="main-section">
				<h3>Criar Notícia</h3>
     		</section>
			
			<section class="main-section">
				{!! Form::open(array('url' => '/createNews', 'method' => 'POST', 'files'=>true)) !!}
					<section class="create-new-field">
						<h4>Título</h4> 
						{!! Form::text('title')!!}
					</section>
					<section class="create-new-field">
						<h4>Imagem</h4>
						{!! Form::file('image') !!}
					</section>
					<section class="create-new-field">
						<h4>Descrição</h4>
						{!! Form::textarea('description','', array('placeholder' => 'Escreva aqui o corpo da notícia')) !!}
					</section>
					{!! Form::submit('Criar notícia',array('class'=>'btn-auth'))!!}
				{!! Form::close() !!}
			</section>
			
		</section>
	</div>

@stop
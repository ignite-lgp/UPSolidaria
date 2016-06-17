@extends('master')

@section('main_content')

	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			@include('partials/auth') 

		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container">
			
			<!-- Title -->
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
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
		<section class="sidebar-left sidebar-left-xs" style="display:none">
			
			@include('partials/auth') 

		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="container">
			
			<!-- Title -->
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
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
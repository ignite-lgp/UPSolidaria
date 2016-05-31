@extends('master')

@section('main_content')

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

			@if ($admin)
			<!-- Admin section -->
				<section class="sidebar-listing hidden-xs">
					<span class="sidebar-title">Administrador</span>
					<ul>
						<li><a onclick="changeInfo();">Editar Informações</a></li>
						<span class="sidebar-title">Gerir Grupos</span>
						<li><a onclick="addGroup();">Adicionar Grupo</a></li>
						<li><a class="manage-volunteers">Gerir Voluntários</a></li>
					</ul>
				</section>
			@endif
			
			<!-- Options -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">G.A.S. Porto</span>
				<ul>
					<li><a>Estrutura</a></li>
					<li><a>O que fazem</a></li>					
					<li><a>Como fazem</a></li>
					<li><a>Formação</a></li>					
					<li><a>Mensagem do presidente</a></li>
				</ul>
			</section>
					
			<!-- Groups -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Grupos</span>
				<ul>
					@foreach ($groups as $group)
					<li><a> {{ $group->name }}</a></li>
					@endforeach
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
				<h4><a>Organizações</a></h4>
				<span>/</span>
				<h4><a class="active">G.A.S. Porto</a></h4>
			</section>
		
			<!-- Organization Section -->
			<section class="organization-section">
				<h3 class="title">{{ $info->name }}</h3>
				<img class="img img-responsive org-img" src="../{{ $image_location }}">
				<section class="info-section">
						<h4 class="sidebar-title">Missão</h4>
						<p class="big">{{ $info->mission }}</p>
				</section>
				<section class="info-section">
						<h4 class="sidebar-title">Visão</h4>
						<p class="big">{{ $info->vision }}</p>
				</section>
				<section class="info-section">
						<h4 class="sidebar-title">Valores</h4>
						<p class="big">{{ $info->values }}</p>
				</section>

				<!-- //////////////////////////// TESTE //////////////////////////////// -->
				<!-- {{ Form::open(array('url' => '/adicionaVoluntario', 'method' => 'POST'))}}
    			{{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Nome'])}}
    			{{ Form::submit('Pesquisar', array('class' => 'button expand')) }}
				{{ Form::close() }} -->

				{{ Form::open(array('url' => '/adicionaVoluntario', 'method' => 'post'))}}
        		{{  Form::label('auto', 'Nome: ') }}
        		{{  Form::text('auto', '', array('id' => 'auto'))}}
        		{{  Form::close() }}

      		</section>


			<!-- Organization Change Info Section -->
		
			<section class="organization-section-change-info" style="display: none;">
				<h3 class="title">Editar Informações</h3>

				{!!  Form::open(array('url' => '/editarInfo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="info-section">
						<h4 class="sidebar-title">Imagem atual</h4>
					<img class="img img-responsive org-img" src="../{{ $image_location }}">
					{!! Form::file('image'); !!} <!-- , $image_location -->
					<section class="info-section">
						<h4 class="sidebar-title">Missão</h4>
					{!! Form::textarea('missao', $info->mission, ['required' => 'required']); !!} <!-- , $info->mission -->
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Visão</h4>
					{!! Form::textarea('visao', $info->vision, ['required' => 'required']); !!} <!-- , $info->vision -->
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Valores</h4>
					{!! Form::textarea('valores', $info->values, ['required' => 'required']); !!} <!-- , $info->values -->
					</section>

					{!! Form::hidden('organizacao', $info->name); !!}
					{!! Form::hidden('organizacao_id', $info->id); !!} 

					{!! Form::submit('Guardar'); !!}
                {!! Form::close() !!}
					</section>
     		</section>

     		<!-- Organization Add Group -->
		
			<section class="organization-section-add-group" style="display: none;">
				<h3 class="title">Adicionar Grupo</h3>

				{!!  Form::open(array('url' => '/adicionarGrupo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="info-section">
						<h4 class="sidebar-title">Imagem</h4>
					{!! Form::file('image'); !!} 
					<section class="info-section">
						<h4 class="sidebar-title">Nome</h4>
					{!! Form::text('nome', '', ['required' => 'required']); !!}
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Descrição</h4>
					{!! Form::textarea('descricao', '', ['required' => 'required']); !!}
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Público</h4>
					{!! Form::checkbox('publico', true); !!}
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Aberto</h4>
					{!! Form::checkbox('aberto', true); !!}
					</section>
					{!! Form::hidden('organizacao_id', $info->id); !!}

					{!! Form::submit('Criar'); !!}
                {!! Form::close() !!}
					</section>
     		</section>


	</div>

				
    </section>


<?php
		echo
		"<script>
			function changeInfo(){
				var x, y;
				// Hide original contents
				x =	document.getElementsByClassName(\"organization-section\");
				y =	document.getElementsByClassName(\"organization-section-add-group\");

				for (i = 0; i < x.length; i++) {
					x[i].style.display = \"none\";
				}
				for (i = 0; i < y.length; i++) {
					y[i].style.display = \"none\";
				}
				// Show new contents
				x =	document.getElementsByClassName(\"organization-section-change-info\");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = \"block\";
				}
			}

			function addGroup(){
				var x, y;
				// Hide original contents
				x =	document.getElementsByClassName(\"organization-section\");
				y = document.getElementsByClassName(\"organization-section-change-info\");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = \"none\";
				}
				for (i = 0; i < y.length; i++) {
					y[i].style.display = \"none\";
				}
				// Show new contents
				x =	document.getElementsByClassName(\"organization-section-add-group\");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = \"block\";
				}
			}
		</script>";
?>

<script type="text/javascript">       
	$(function() {
	$("#auto").autocomplete({
		 	minLength: 2,
		  source: './search/autocomplete',
		  select: function(event, ui) {
	  			$("#auto").val(ui.item.value);
     }});
});

@stop
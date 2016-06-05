@extends('master')

@section('main_content')

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
					</ul>
				</section>
				<section class="sidebar-listing hidden-xs">
					<span class="sidebar-title">Gerir Gruposr</span>
					<ul>
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
			
			@include('partials/auth') 

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
		
			<section class="main-section organization-section-add-group" style="display: none;">
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


     <script src="/src/js/organization_page.js"></script>
     
     



@stop
@extends('master')

@section('main_content')

	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search sample -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Organizações" />
			</section>

			@if ($admin)
			<!-- Admin section -->
				<section class="sidebar-listing">
					<span class="sidebar-title">Administrador</span>
					<ul>
						<li><a onclick="changeInfo();">Editar Informações</a></li>
					</ul>
				</section>
				<section class="sidebar-listing">
					<span class="sidebar-title">Gerir Gruposr</span>
					<ul>
						<li><a onclick="addGroup();">Adicionar Grupo</a></li>
						<li><a class="manage-volunteers">Gerir Voluntários</a></li>
					</ul>
				</section>
			@endif
			
			<!-- Options -->
			<section class="sidebar-listing">
				<span class="sidebar-title">G.A.S. Porto</span>
				@if ($is_in)
					{!! Form::open(array('url' => '/organizacao/' . $info->name . '/signin', 'method' => 'POST')) !!}	
					{!! Form::submit('Aderir',array('class'=>'btn-auth'))!!}
					{!! Form::close() !!}
				@endif
				<ul>
					<li><a>Estrutura</a></li>
					<li><a>O que fazem</a></li>					
					<li><a>Como fazem</a></li>
					<li><a>Formação</a></li>					
					<li><a>Mensagem do presidente</a></li>
				</ul>
			</section>
					
			<!-- Groups -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Grupos</span>
				<ul>
					@foreach ($groups as $group)
					<li><a href="/organizacao/{{ $info->name }}/grupo/{{ $group->name }}"> {{ $group->name }}</a></li>
					@endforeach
				</ul>
			</section>
				
			<!-- Activities -->
				
			<section class="sidebar-listing">
				<span class="sidebar-title">Atividades</span>
				<ul>
			<!--		@foreach ($activities as $activity) -->
			<!--		<li><a href="/organizacao/{{ $info->name }}/atividade/{{ $activity->name }}"> {{ $activity->name }}</a></li> -->
			<!--		@endforeach -->
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
				<h4><a href="/organizacoes">Organizações</a></h4>
				<span>/</span>
				<h4><a class="active">{!! $info->name !!}</a></h4>
			</section>
		
			<!-- Organization Section -->
			<section class="organization-section">
				<h3 class="title">{!! $info->name !!}</h3>
				<img class="img img-responsive org-img" src="../{{ $image_location }}">
				<section class="info-section">
						<h4 class="sidebar-title">Description</h4>
						<p class="big">{!! $info->description !!}</p>
				</section>

				<a href="{{ $info->website }}" target="_blank"><p class="big">{!! $info->website !!}</p></a> 

      		</section>


			<!-- Organization Change Info Section -->
			<section class="main-section organization-section-change-info" style="display: none;">
				<h3 class="title">Editar Informações</h3>

				{!!  Form::open(array('url' => '/editarInfo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="info-section">
						<h4 class="sidebar-title">Imagem atual</h4>
					<img class="img img-responsive org-img" src="../{{ $image_location }}">
					{!! Form::file('image'); !!} <!-- , $image_location -->
					<section class="info-section">
						<h4 class="sidebar-title">Description</h4>
					{!! Form::textarea('missao', $info->description); !!} <!-- , $info->description -->
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
					{!! Form::text('nome', ''); !!}
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Descrição</h4>
					{!! Form::textarea('descricao', ''); !!}
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

		</section>
	
	</div>
	
	
	<!-- Body -->
	<div class="container mobile-container visible-xs">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left sidebar-left-xs" style="display:none;">
			
			<!-- Search sample -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Organizações" />
			</section>

			@if ($admin)
			<!-- Admin section -->
				<section class="sidebar-listing">
					<span class="sidebar-title">Administrador</span>
					<ul>
						<li><a onclick="changeInfo();">Editar Informações</a></li>
					</ul>
				</section>
				<section class="sidebar-listing">
					<span class="sidebar-title">Gerir Gruposr</span>
					<ul>
						<li><a onclick="addGroup();">Adicionar Grupo</a></li>
						<li><a class="manage-volunteers">Gerir Voluntários</a></li>
					</ul>
				</section>
			@endif
			
			<!-- Options -->
			<section class="sidebar-listing">
				<span class="sidebar-title">G.A.S. Porto</span>
				@if ($is_in)
					{!! Form::open(array('url' => '/organizacao/' . $info->name . '/signin', 'method' => 'POST')) !!}	
					{!! Form::submit('Aderir',array('class'=>'btn-auth'))!!}
					{!! Form::close() !!}
				@endif
				<ul>
					<li><a>Estrutura</a></li>
					<li><a>O que fazem</a></li>					
					<li><a>Como fazem</a></li>
					<li><a>Formação</a></li>					
					<li><a>Mensagem do presidente</a></li>
				</ul>
			</section>
					
			<!-- Groups -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Grupos</span>
				<ul>
					@foreach ($groups as $group)
					<li><a href="/organizacao/{{ $info->name }}/grupo/{{ $group->name }}"> {{ $group->name }}</a></li>
					@endforeach
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
				<h4><a href="/organizacoes">Organizações</a></h4>
				<span>/</span>
				<h4><a class="active">{{ $info->name }}</a></h4>
			</section>
		
			<!-- Organization Section -->
			<section class="main-section organization-section">
				<h3 class="title">{{ $info->name }}</h3>
				<img class="img img-responsive org-img" src="../{{ $image_location }}">
				<section class="info-section">
						<h4 class="sidebar-title">Description</h4>
						<p class="big">{{ $info->description }}</p>
				</section>

      		</section>


			<!-- Organization Change Info Section -->
			<section class="main-section organization-section-change-info" style="display: none;">
				<h3 class="title">Editar Informações</h3>

				{!!  Form::open(array('url' => '/editarInfo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="info-section">
						<h4 class="sidebar-title">Imagem atual</h4>
					<img class="img img-responsive org-img" src="../{{ $image_location }}">
					{!! Form::file('image'); !!} <!-- , $image_location -->
					<section class="info-section">
						<h4 class="sidebar-title">Description</h4>
					{!! Form::textarea('missao', $info->description); !!} <!-- , $info->description -->
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
					{!! Form::text('nome', ''); !!}
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Descrição</h4>
					{!! Form::textarea('descricao', ''); !!}
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

		</section>
	
	</div>
    </section>

    <script src="/src/js/organization_page.js"></script>
    
@stop
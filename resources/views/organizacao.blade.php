@extends('master')

@section('title')
	<title>Organização {{ $info->name }}</title>
@stop

@section('tab_selector')
	<script type="text/javascript">updateHeader('organizacoes');</script>
@stop

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
					<span class="sidebar-title">Gerir Grupos</span>
					<ul>
						<li><a onclick="addGroup();">Adicionar Grupo</a></li>
						<li><a onclick="addActivity()">Adicionar Atividades</a></li>
					</ul>
				</section>
				<section class="sidebar-listing">
					<span class="sidebar-title">Gerir Voluntários</span>
					<ul>
						<li><a onclick="addVolunteers();">Adicionar Voluntários a Organização </a></li>
					</ul>
				</section>
			@endif
			
			<!-- Options -->
			<section class="sidebar-listing">
				<span class="sidebar-title">{!! $info->name !!}</span>
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
					@foreach ($activities as $activity)
						<li><a href="/organizacao/{{ $info->name }}/atividade/{{ $activity->name }}"> {{ $activity->name }}</a></li>
					@endforeach
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
			<section class="main-section organization-section">
				<h3 class="title">{!! $info->name !!}</h3>
				<img class="img img-responsive org-img" src="/{{ $image_location }}">
				<section class="info-section">
						<p class="big">{!! $info->description !!}</p>
				</section>

				<h4>Contatos</h4>
            	
            	@if( $info->address != NULL)
				<section class="info-section contacts">
					<h5 class="strong">Morada:</h5>
					<p>{!! $info->address !!}</p>   
				</section>
				@endif

				@if( $info->phone != NULL)
				<section class="info-section contacts">
					<h5 class="strong">Telefone:</h5>
					<p>{!! $info->phone !!}</p>
				</section>
				@endif

				@if( $info->email != NULL)
				<section class="info-section contacts">
                    <h5 class="strong">E-mail:</h5>
                    <a target="_top" href="mailto:{{ $info->email }}?subject=contact%20from%20UPSolidaria&body=This%20email%20has%20been%20send%20trough%20UPSolidaria%20website">{{ $info->email}}</a>
				</section>
				@endif

				 @if( $info->website != NULL)
				<section class="info-section contacts">
                    <h5 class="strong">Website:</h5>
                    <a href="{{ $info->website }}" target="_blank"><p>{!! $info->website !!}</p></a> 
				</section>
				@endif
				
      		</section>


			<!-- Organization Change Info Section -->
			<section class="main-section organization-section-change-info" style="display: none;">
				<h3 class="title">Editar Informações</h3>
			</section>
			<section class="main-section organization-section-change-info" style="display: none;">
				{!!  Form::open(array('url' => '/editarInfo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="create-new-field">
						<h4>Imagem atual</h4>
						<img class="img img-responsive" src="/{{ $image_location }}">
						{!! Form::file('image'); !!} <!-- , $image_location -->
					</section>
					<section class="create-new-field">
						<h4>Descrição da Organização</h4>
						{!! Form::textarea('description', $info->description); !!} <!-- , $info->description -->
					</section>

					{!! Form::hidden('organizacao', $info->name); !!}
					{!! Form::hidden('organizacao_id', $info->id); !!} 

					{!! Form::submit('Guardar',array('class'=>'btn-auth')); !!}
                {!! Form::close() !!}
     		</section>

     		<!-- Organization Add Group -->
			<section class="main-section organization-section-add-group" style="display: none;">
				<h3 class="title">Adicionar Grupo</h3>
			</section>
			<section class="main-section organization-section-add-group" style="display: none;">
				{!!  Form::open(array('url' => '/adicionarGrupo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="create-new-field">
						<h4>Imagem</h4>
						{!! Form::file('image'); !!} 
					</section>
					<section class="create-new-field">
						<h4>Nome</h4>
						{!! Form::text('nome', ''); !!}
					</section>
					<section class="create-new-field">
						<h4>Descrição</h4>
						{!! Form::textarea('descricao', ''); !!}
					</section>
					<section class="create-new-field">
						<h4>Público</h4>
						{!! Form::checkbox('publico', true); !!}
					</section>
					<section class="create-new-field">
						<h4>Aberto</h4>
						{!! Form::checkbox('aberto', true); !!}
					</section>
					{!! Form::hidden('organizacao_id', $info->id); !!}

					{!! Form::submit('Criar',array('class'=>'btn-auth')); !!}
                {!! Form::close() !!}
     		</section>

     		<!-- Organization Add Activity -->
			<section class="main-section organization-section-add-activity" style="display: none;">
				<h3 class="title">Adicionar Atividade</h3>
			</section>
			<section class="main-section organization-section-add-activity" style="display: none;">
				{!!  Form::open(array('url' => '/organizacao/adicionarAtividade', 'method' => 'post', 'files' => 'true')) !!}
					<section class="create-new-field">
						<h4>Nome</h4>
						{!! Form::text('nome', ''); !!}
					</section>
					<section class="create-new-field">
						<h4>Imagem</h4>
						{!! Form::file('image'); !!} 
					</section>
					<section class="create-new-field">
						<h4>Associar a um grupo</h4>
						{!! Form::select('grupo', $groupsForActivities); !!}
					</section>
					<section class="create-new-field">
						<h4>Descrição</h4>
						{!! Form::textarea('descricao', ''); !!}
					</section>
					<section class="create-new-field">
						<h4>Data de Inicio</h4>
						{!! Form::date('dateInit', \Carbon\Carbon::now()) !!}
					</section>
					<section class="create-new-field">
						<h4>Data de Fim</h4>
						{!! Form::date('dateEnd', \Carbon\Carbon::now()) !!}
					</section>
					<section class="create-new-field">
						<h4>Privacidade</h4>
						{{  Form::label('publico', 'Público  ') }}
						{!! Form::checkbox('publico', true); !!}
						<br>
						{{  Form::label('aberto', 'Aberto  ') }}
						{!! Form::checkbox('aberto', true); !!}
					</section>
					<section class="create-new-field">
					</section>
					{!! Form::hidden('organizacao_id', $info->id) !!}

					{!! Form::submit('Criar',array('class'=>'btn-auth')); !!}
                {!! Form::close() !!}
     		</section>

     		<!-- Add Volunteers to Organization -->
			<section class="main-section organization-section-add-volunteer" style="display: none;">
				<h3 class="title">Adicionar Voluntários</h3>
			</section>
			<section class="main-section organization-section-add-volunteer" style="display: none;">
				{{ Form::open(array('url' => '/adicionaVoluntario', 'method' => 'post'))}}
					{{  Form::label('user_nome', 'Nome: ') }}
					{{  Form::text('user_nome', '', array('id' => 'user_nome'))}}
					{{ 	Form::hidden('organizacao_id', $info->id, array('id' => 'organizacao_id')) }}
					{!! Form::submit('Adicionar',array('class'=>'btn-auth')); !!}
				{{ Form::close() }}
				
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
					<span class="sidebar-title">Gerir Grupos</span>
					<ul>
						<li><a onclick="addGroup();">Adicionar Grupo</a></li>
					</ul>
					<span class="sidebar-title">Gerir Voluntários</span>
					<ul>
						<li><a onclick="addVolunteers();">Adicionar Voluntários a Organização </a></li>
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
				<h4><a class="active">{!! $info->name !!}</a></h4>
			</section>
		
			<!-- Organization Section -->
			<section class="main-section organization-section">
				<h3 class="title">{!! $info->name !!}</h3>
				<img class="img img-responsive org-img" src="/{{ $image_location }}">
				<section class="info-section">
						<p class="big">{!! $info->description !!}</p>
				</section>

				<h4>Contatos</h4>
            	
            	@if( $info->address != NULL)
				<section class="info-section contacts">
					<h5 class="strong">Morada:</h5>
					<p>{!! $info->address !!}</p>   
				</section>
				@endif

				@if( $info->phone != NULL)
				<section class="info-section contacts">
					<h5 class="strong">Telefone:</h5>
					<p>{!! $info->phone !!}</p>
				</section>
				@endif

				@if( $info->email != NULL)
				<section class="info-section contacts">
                    <h5 class="strong">E-mail:</h5>
                    <a target="_top" href="mailto:{{ $info->email }}?subject=contact%20from%20UPSolidaria&body=This%20email%20has%20been%20send%20trough%20UPSolidaria%20website">{{ $info->email}}</a>
				</section>
				@endif

				 @if( $info->website != NULL)
				<section class="info-section contacts">
                    <h5 class="strong">Website:</h5>
                    <a href="{{ $info->website }}" target="_blank"><p>{!! $info->website !!}</p></a> 
				</section>
				@endif
				
      		</section>


			<!-- Organization Change Info Section -->
			<section class="main-section organization-section-change-info" style="display: none;">
				<h3 class="title">Editar Informações</h3>
			</section>
			<section class="main-section organization-section-change-info" style="display: none;">
				{!!  Form::open(array('url' => '/editarInfo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="create-new-field">
						<h4>Imagem atual</h4>
						<img class="img img-responsive" src="/{{ $image_location }}">
						{!! Form::file('image'); !!} <!-- , $image_location -->
					</section>
					<section class="create-new-field">
						<h4>Descrição da Organização</h4>
						{!! Form::textarea('description', $info->description); !!} <!-- , $info->description -->
					</section>

					{!! Form::hidden('organizacao', $info->name); !!}
					{!! Form::hidden('organizacao_id', $info->id); !!} 

					{!! Form::submit('Guardar',array('class'=>'btn-auth')); !!}
                {!! Form::close() !!}
     		</section>

     		<!-- Organization Add Group -->
			<section class="main-section organization-section-add-group" style="display: none;">
				<h3 class="title">Adicionar Grupo</h3>
			</section>
			<section class="main-section organization-section-add-group" style="display: none;">
				{!!  Form::open(array('url' => '/adicionarGrupo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="create-new-field">
						<h4>Imagem</h4>
						{!! Form::file('image'); !!} 
					</section>
					<section class="create-new-field">
						<h4>Nome</h4>
						{!! Form::text('nome', ''); !!}
					</section>
					<section class="create-new-field">
						<h4>Descrição</h4>
						{!! Form::textarea('descricao', ''); !!}
					</section>
					<section class="create-new-field">
						<h4>Público</h4>
						{!! Form::checkbox('publico', true); !!}
					</section>
					<section class="create-new-field">
						<h4>Aberto</h4>
						{!! Form::checkbox('aberto', true); !!}
					</section>
					{!! Form::hidden('organizacao_id', $info->id); !!}

					{!! Form::submit('Criar',array('class'=>'btn-auth')); !!}
                {!! Form::close() !!}
     		</section>

     		<!-- Organization Add Activity -->
			<section class="main-section organization-section-add-activity" style="display: none;">
				<h3 class="title">Adicionar Atividade</h3>
			</section>
			<section class="main-section organization-section-add-activity" style="display: none;">
				{!!  Form::open(array('url' => '/organizacao/adicionarAtividade', 'method' => 'post', 'files' => 'true')) !!}
					<section class="create-new-field">
						<h4>Nome</h4>
						{!! Form::text('nome', ''); !!}
					</section>
					<section class="create-new-field">
						<h4>Imagem</h4>
						{!! Form::file('image'); !!} 
					</section>
					<section class="create-new-field">
						<h4>Associar a um grupo</h4>
						{!! Form::select('grupo', $groupsForActivities); !!}
					</section>
					<section class="create-new-field">
						<h4>Descrição</h4>
						{!! Form::textarea('descricao', ''); !!}
					</section>
					<section class="create-new-field">
						<h4>Data de Inicio</h4>
						{!! Form::date('dateInit', \Carbon\Carbon::now()) !!}
					</section>
					<section class="create-new-field">
						<h4>Data de Fim</h4>
						{!! Form::date('dateEnd', \Carbon\Carbon::now()) !!}
					</section>
					<section class="create-new-field">
						<h4>Privacidade</h4>
						{{  Form::label('publico', 'Público  ') }}
						{!! Form::checkbox('publico', true); !!}
						<br>
						{{  Form::label('aberto', 'Aberto  ') }}
						{!! Form::checkbox('aberto', true); !!}
					</section>
					<section class="create-new-field">
					</section>
					{!! Form::hidden('organizacao_id', $info->id) !!}

					{!! Form::submit('Criar',array('class'=>'btn-auth')); !!}
                {!! Form::close() !!}
     		</section>

     		<!-- Add Volunteers to Organization -->
			<section class="main-section organization-section-add-volunteer" style="display: none;">
				<h3 class="title">Adicionar Voluntários</h3>
			</section>
			<section class="main-section organization-section-add-volunteer" style="display: none;">
				{{ Form::open(array('url' => '/adicionaVoluntario', 'method' => 'post'))}}
					{{  Form::label('user_nome', 'Nome: ') }}
					{{  Form::text('user_nome', '', array('id' => 'user_nome'))}}
					{{ 	Form::hidden('organizacao_id', $info->id, array('id' => 'organizacao_id')) }}
					{!! Form::submit('Adicionar',array('class'=>'btn-auth')); !!}
				{{ Form::close() }}
				
     		</section>

		</section>
	
	</div>
    </section>

    <script src="/src/js/organization_page.js"></script>
    
@stop
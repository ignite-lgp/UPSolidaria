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
						<li><a class="manage-volunteers">Gerir Membros do Grupo</a></li>
					</ul>
				</section>
				<section class="sidebar-listing hidden-xs">
					<span class="sidebar-title">Gerir Atividades</span>
					<ul>
						<li><a onclick="addActivity();">Adicionar Atividade</a></li>
						<li><a class="manage-volunteers">Gerir Atividades</a></li>
					</ul>
				</section>
			@endif
			
			<!-- Activities -->
			<section class="hidden-xs">
                <span class="sidebar-title">Atividades</span>
                <ul>
                    <li>Ponto Verde Open Inovation</li>
                    <li><a class="red-link">Concursos | Até: 8 Abril, 2016</a></li>
                </ul>
                <hr>
                <ul>
                    <li>Ciclo de debates: Integração de Portugal na União Europeia | 30anos, 10 debates...</li>
                    <li><a class="red-link">Eventos | Até: 21 Março, 2016</a></li>
                </ul>
                <hr>
                <ul>
                    <li>Oportunidades de Financiamento U.Porto | 2016-03-21</li>
                    <li><a class="red-link">Concursos | Até: 8 Abril, 2016</a></li>
                </ul>
                <hr>
                <ul>
                    <li>Passatempo | Mostra U.Porto 2016 no Instagram</li>
                    <li><a class="red-link">Concursos | Até: 20 Março, 2016</a></li>
                </ul>
                <br><a class="red-link">Ver mais...</a>
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
				<h4><a></a></h4>
				<span>/</span>
				<h4><a class="active">{{ $info->name }}</a></h4>
      		</section>

      		<!-- Organization Section -->
			<section class="organization-section">
				<h3 class="title">{{ $info->name }}</h3>
				<img class="img img-responsive org-img" src="/src/imgs/capagrupo.png">
				<section class="info-section">
						<h4 class="sidebar-title">Missão</h4>
						<p class="big">{{ $info->description }}</p>
				</section>
				

      		</section>

			<!-- Organization Change Info Section -->
			<section class="group-section-change-info" style="display: none;">
				<h3 class="title">Editar Informações</h3>

				{!!  Form::open(array('url' => '/editarInfo', 'method' => 'post', 'files' => 'true')) !!}
					<section class="info-section">
						<h4 class="sidebar-title">Imagem atual</h4>
					<img class="img img-responsive org-img" src="../{{ $image_location }}">
					{!! Form::file('image'); !!} <!-- , $image_location -->
					<section class="info-section">
						<h4 class="sidebar-title">Missão</h4>
					{!! Form::textarea('missao', '', ['required' => 'required']); !!} <!-- , $info->mission -->
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Visão</h4>
					{!! Form::textarea('visao', '', ['required' => 'required']); !!} <!-- , $info->vision -->
					</section>
					<section class="info-section">
						<h4 class="sidebar-title">Valores</h4>
					{!! Form::textarea('valores', '', ['required' => 'required']); !!} <!-- , $info->values -->
					</section>

					{!! Form::hidden('organizacao', ''); !!}
					{!! Form::hidden('organizacao_id', ''); !!} 

					{!! Form::submit('Guardar'); !!}
                {!! Form::close() !!}
					</section>
     		</section>

     		<!-- Organization Add Activity -->
		
			<section class="main-section group-section-add-activity" style="display: none;">
				<h3 class="title">Criar Atividade</h3>

				{!!  Form::open(array('url' => '/adicionarAtividade', 'method' => 'post', 'files' => 'true')) !!}
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
					{!! Form::hidden('grupo_id', $info->id); !!}

					{!! Form::submit('Criar'); !!}
                {!! Form::close() !!}
					</section>
     		</section>


	</div>

				
    </section>


     <script src="/src/js/group_page.js"></script>
     
    
@stop
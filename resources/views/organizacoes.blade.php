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
			
            <!-- Categories -->
			<section class="sidebar-categories hidden-xs">
				<span class="sidebar-title">categorias</span>
				@foreach ($orgs as $org)
					<a>{{ $org->name }}</a>
                @endforeach
			</section>
            
			<!-- Interests -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Áreas de Interesse</span>
				<ul>
					<li><a>Ambiente</a></li>
					<li><a>Cidadania e Direitos</a></li>
                    <li><a>Ciência</a></li>
                    <li><a>Computadores e Tecnologia</a></li>
                    <li><a>Cultura e Artes</a></li>
                    <li><a>Desporto e Lazer</a></li>
                    <li><a>Educação</a></li>
                    <li><a>Desporto e Lazer</a></li>
                    <li><a>Engenharia</a></li>
                    <li><a>Inovação e Empreendedorismo</a></li>
                    <li><a>Saúde</a></li>
					<li><a>Solidariedade Social</a></li>
				</ul>
			</section>
            
            <!-- Interests -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Público Alvo</span>
				<ul>
					<li><a>Animais</a></li>
					<li><a>CPLP</a></li>
                    <li><a>Crianças</a></li>
                    <li><a>Deficientes</a></li>
                    <li><a>Desempregados</a></li>
                    <li><a>Doentes</a></li>
                    <li><a>Estudantes</a></li>
                    <li><a>Idosos</a></li>
                    <li><a>Jovens</a></li>
                    <li><a>Mães</a></li>
                    <li><a>Sem-abrigo</a></li>
				</ul>
			</section>
			
			@include('partials/auth') 		
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container hidden-xs">
		
			<!-- Title -->
			<section class="title-section hidden-xs">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><a class="active">Organizações</a></h4>
			</section>
            
            <h3 class="title">Organizações</h3>
            
    <!-- ///////////////////////////////////////////////////// -->

			<div class="row org-row">
            	@foreach ($orgs as $org)
   				<div class="col-xs-6 col-sm-3">
   					<!-- Imagens das organizações têm que ter exatamente o nome que está guardado na bd -->
					<img class="img img-responsive org-list-img" src="/{{ $org->location}}">
					<a href="organizacao/{{ $org->name}}">
					<span class="org-list-title"> {{ $org->name}} </span>
					</a>
				</div>
				@endforeach
			</div>

<!-- //////////////////////////////////////////////////	-->        
	
	<section class="container" id="main-container-xs">
		
		<section class="title-section-xs visible-xs">
			<h4><a href="/">U.Porto Voluntariado</a></h4>
			<span>/</span>
			<h4><a class="active">Organizações</a></h4>
		</section>
		
		<section class="main-container-xs visible-xs">
			<section class="main-title-section-xs">
				<h3 class="title">Organizações</h3>
			</section>
		</section>
		
		<div class="row org-row visible-xs">
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/ajudaris.png">
				<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/curamais.png">
				<span class="org-list-title">Associação Cura +</span>
			</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block org-block"></div>

			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/afs.png">
				<span class="org-list-title">Associação Intercultural AFS</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/moa.png">
				<span class="org-list-title">Fundação MOA de Portugal</span>
			</div>
        </div>
		
		<div class="row org-row visible-xs">
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/ajudaris.png">
				<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/curamais.png">
				<span class="org-list-title">Associação Cura +</span>
			</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block org-block"></div>

			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/afs.png">
				<span class="org-list-title">Associação Intercultural AFS</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/moa.png">
				<span class="org-list-title">Fundação MOA de Portugal</span>
			</div>
        </div>
		
		<div class="row org-row visible-xs">
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/ajudaris.png">
				<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/curamais.png">
				<span class="org-list-title">Associação Cura +</span>
			</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block org-block"></div>

			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/afs.png">
				<span class="org-list-title">Associação Intercultural AFS</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/moa.png">
				<span class="org-list-title">Fundação MOA de Portugal</span>
			</div>
        </div>
		
		<div class="row org-row visible-xs">
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/ajudaris.png">
				<span class="org-list-title">Ajudaris - Associação de Solidariedade Social</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/curamais.png">
				<span class="org-list-title">Associação Cura +</span>
			</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block org-block"></div>

			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/afs.png">
				<span class="org-list-title">Associação Intercultural AFS</span>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img img-responsive org-list-img" src="/src/imgs/organizations/moa.png">
				<span class="org-list-title">Fundação MOA de Portugal</span>
			</div>
         </div>
	</section>
	
@stop
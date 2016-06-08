@extends('master')

@section('main_content')

	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search sample -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Pessoas" />
			</section>
			
			<!-- Options -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Outros Contatos</span>
				<ul>
					<li><a>Maria Clara Martins</a></li>
					<li><a>Manuel Nuno Alçada</a></li>					
					<li><a>Maria Teresa Proença</a></li>
					<li><a>Marianela Santos Silva</a></li>					
					<li><a>João Pereira da Silva</a></li>
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
				<h4><a class="active">Contatos</a></h4>
			</section>
		
            <h3 class="title">Contatos</h3>
            
			<!-- Organization Section -->
			<section class="contacts-section">
				<section class="info-section contacts">
					<h5 class="strong">Morada:</h5>
					<p>Reitoria da Universidade do Porto</p>
                    <p>Praça de Gomes Teixeira</p>
                    <p>4099-002 Porto, Portugal</p>
				</section>
				<section class="info-section contacts">
					<h5 class="strong">Telefone:</h5>
					<p>(+351) 22 040 8210</p>
				</section>
				<section class="info-section contacts">
                    <h5 class="strong">E-mail:</h5>
                    <p>voluntariado.up@reit.up.pt</p>
				</section>
                <section class="info-section contacts">
					<h5 class="strong">Coordenador:</h5>
                    <span>Manuel José Carvalho</span>
				</section>
				<section class="info-section contacts">
					<h5 class="strong">Membros</h5>
                    <p>Maria Clara Martins (técnica superior)</p>
					<p>Manuel Nuno Alçada (docente)</p>
                    <p>Maria Teresa Campos Proença (docente)</p>
                    <p>Marianela Santos Silva (técnica superior)</p>
                    <p>João Pereira da Silva (estudante)</p>
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
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Pessoas" />
			</section>
			
			<!-- Options -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Outros Contatos</span>
				<ul>
					<li><a>Maria Clara Martins</a></li>
					<li><a>Manuel Nuno Alçada</a></li>					
					<li><a>Maria Teresa Proença</a></li>
					<li><a>Marianela Santos Silva</a></li>					
					<li><a>João Pereira da Silva</a></li>
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
				<h4><a class="active">Contatos</a></h4>
			</section>
		
            <h3 class="title">Contatos</h3>
            
			<!-- Organization Section -->
			<section class="contacts-section">
				<section class="info-section contacts">
					<h5 class="strong">Morada:</h5>
					<p>Reitoria da Universidade do Porto</p>
                    <p>Praça de Gomes Teixeira</p>
                    <p>4099-002 Porto, Portugal</p>
				</section>
				<section class="info-section contacts">
					<h5 class="strong">Telefone:</h5>
					<p>(+351) 22 040 8210</p>
				</section>
				<section class="info-section contacts">
                    <h5 class="strong">E-mail:</h5>
                    <p>voluntariado.up@reit.up.pt</p>
				</section>
                <section class="info-section contacts">
					<h5 class="strong">Coordenador:</h5>
                    <span>Manuel José Carvalho</span>
				</section>
				<section class="info-section contacts">
					<h5 class="strong">Membros</h5>
                    <p>Maria Clara Martins (técnica superior)</p>
					<p>Manuel Nuno Alçada (docente)</p>
                    <p>Maria Teresa Campos Proença (docente)</p>
                    <p>Marianela Santos Silva (técnica superior)</p>
                    <p>João Pereira da Silva (estudante)</p>
				</section>
            </section>
        </section>
	</div>
	
@stop
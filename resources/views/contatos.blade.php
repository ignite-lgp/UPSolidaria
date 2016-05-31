@extends('master')

@section('main_content')

	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search sample -->
			<section class="hidden-xs"> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Pessoas" />
			</section>
			
			<!-- Options -->
			<section class="sidebar-listing hidden-xs">
				<span class="sidebar-title">Outros Contatos</span>
				<ul>
					<li><a>Maria Clara Martins</a></li>
					<li><a>Manuel Nuno Alçada</a></li>					
					<li><a>Maria Teresa Proença</a></li>
					<li><a>Marianela Santos Silva</a></li>					
					<li><a>João Pereira da Silva</a></li>
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
	
	<section class="container" id="main-container-xs">
        <section class="title-section-xs visible-xs">
			<h4><a>U.Porto Voluntariado</a></h4>
			<span>/</span>
			<h4><a class="active">Contatos</a></h4>
		</section>
		
		<section class="main-container-xs visible-xs">
			<section class="main-title-section-xs">
				<h3 class="title">Contatos</h3>
			</section>
		</section>
        
        <section class="contacts-section visible-xs">
            <section class="info-section contacts">
                <h5 class="strong">Morada:</h5>
                <p>Reitoria da Universidade do Porto</p>
                <p>Praça de Gomes Teixeira</p>
                <p>4099-002 Porto, Portugal</p>
            </section>
            <section class="info-section contacts">
                <h5 class="strong">Telefone:</h5>
                <p>(+351) 22 040 8210</p>
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
	
@stop
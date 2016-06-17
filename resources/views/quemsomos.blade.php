@extends('master')

@section('title')
	<title>Quem Somos</title>
@stop

@section('tab_selector')
	<script type="text/javascript">updateHeader('quem_somos');</script>
@stop

@section('main_content')
	
	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search sample -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar" />
			</section>
			
			<!-- Options sample -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Ligações Úteis</span>
				<ul>
					<li><a>Ser Voluntário na U.P.</a></li>
					<li><a>Juntar-se a uma organização</a></li>					
					<li><a>Contactar organização</a></li>
                    <li><a>Atividades do voluntariado</a></li>
				</ul>
			</section>
            
            <section class="sidebar-listing">
				<span class="sidebar-title">Documentos</span>
				<ul>
					<li>Princípios de Enquadramento de Voluntariado da U.Porto</li>
					<li><a class="red-link" href="./download">Descarregar</a></li>
				</ul>
				<hr>
                <ul>
                    <li>Despacho Reitoral</li>
					<li><a class="red-link">Descarregar</a></li>
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
				<h4><a class="active">Quem Somos</a></h4>
			</section>
            
            <section class="main-section">
                    <h3>Quem Somos</h3>
		    </section>
            
            <section class="img-section">
                <img class="img img-responsive" src="/src/imgs/quemsomos.jpg">
            </section>
            
            <section class="text-section">
                <p>O voluntariado é uma atividade inerente ao exercício de cidadania que se traduz numa relação de solidariedade e de participação cívica individual e comunitária exercida de forma livre, responsável e organizada, tendo em vista a solução dos problemas que afetam alguns grupos sociais ou, mesmo, a sociedade em geral, conforme o consagra a <strong>Lei nº 71/98, de 3 de novembro</strong>, que estabeleceu as bases jurídicas do voluntariado.</p>
                <p>A U.Porto, consciente da sua responsabilidade social na promoção do bem comum e de uma maior justiça social, tem vindo a apoiar e a promover, centralmente e através das suas unidades orgânicas, diversas atividades de voluntariado em articulação com outras entidades directamente envolvidas no exercício consciente da solidariedade e da cidadania. Conforme definido nos "<strong>Princípios de Enquadramento de Voluntariado da U.Porto</strong>", esta pretende estimular a comunidade académica, muito especialmente os/as estudantes, a envolver-se em múltiplas atividades de voluntariado, em regime livre, generoso e totalmente voluntário.</p>
                <p>Para o enquadramento e articulação das ações de voluntariado, a U.Porto criou uma <strong>Comissão de Voluntariado</strong> que promoverá e divulgará junto da comunidade académica a prática do voluntariado, estabelecerá protocolos e acordos de cooperação com entidades especialmente vocacionadas para a ajuda humanitária, para o apoio a grupos sociais ou etários especialmente necessitados ou carenciados, para a promoção do sucesso escolar, da cultura e do desporto e, em geral, para o exercício da cidadania ativa e responsável da sua comunidade académica.</p>
                <p>Os programas de voluntariado reconhecidos pela U.Porto obedecerão aos princípios legais e éticos que lhe subjazem, podendo abarcar tanto atividades de curta duração associadas a objetivos específicos, como, desejavelmente, atividades mais duradouras, regulares ou contínuas, de acordo com as necessidades dos grupos sociais ou das áreas de intervenção dos voluntários e das entidades a que se venham a associar.</p>
                <p>Entende-se que o verdadeiro voluntariado deve ser exercido sem ser esperada qualquer Compensação em troca. Contudo, considera-se adequado que seja certificado, especialmente aos estudantes, o exercício de ações de voluntariado devidamente reconhecidas pela U.Porto, em particular através da devida menção no suplemento ao diploma, desde que cumpridos os critérios exigidos no Despacho Reitoral aplicável (<strong>Despacho Reitoral nº GR.03/02/2010</strong>).</p>
                <p><strong>Ser voluntário na U.Porto</strong> implica, quer para as entidades de acolhimento, quer para o voluntário, a assunção de um compromisso, de acordo com os princípios prosseguidos pela U.Porto.</p>
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
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar" />
			</section>
			
			<!-- Options sample -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Ligações Úteis</span>
				<ul>
					<li><a>Ser Voluntário na U.P.</a></li>
					<li><a>Juntar-se a uma organização</a></li>					
					<li><a>Contactar organização</a></li>
                    <li><a>Atividades do voluntariado</a></li>
				</ul>
			</section>
            
            <section class="sidebar-listing">
				<span class="sidebar-title">Documentos</span>
				<ul>
					<li>Princípios de Enquadramento de Voluntariado da U.Porto</li>
					<li><a class="red-link" href="./download">Descarregar</a></li>
				</ul>
				<hr>
                <ul>
                    <li>Despacho Reitoral</li>
					<li><a class="red-link">Descarregar</a></li>
                </ul>
				<hr>
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
				<h4><a class="active">Quem Somos</a></h4>
			</section>
            
            <section class="main-section">
                    <h3>Quem Somos</h3>
		    </section>
            
            <section class="img-section">
                <img class="img img-responsive" src="/src/imgs/quemsomos.jpg">
            </section>
            
            <section class="text-section">
                <p>O voluntariado é uma atividade inerente ao exercício de cidadania que se traduz numa relação de solidariedade e de participação cívica individual e comunitária exercida de forma livre, responsável e organizada, tendo em vista a solução dos problemas que afetam alguns grupos sociais ou, mesmo, a sociedade em geral, conforme o consagra a <strong>Lei nº 71/98, de 3 de novembro</strong>, que estabeleceu as bases jurídicas do voluntariado.</p>
                <p>A U.Porto, consciente da sua responsabilidade social na promoção do bem comum e de uma maior justiça social, tem vindo a apoiar e a promover, centralmente e através das suas unidades orgânicas, diversas atividades de voluntariado em articulação com outras entidades directamente envolvidas no exercício consciente da solidariedade e da cidadania. Conforme definido nos "<strong>Princípios de Enquadramento de Voluntariado da U.Porto</strong>", esta pretende estimular a comunidade académica, muito especialmente os/as estudantes, a envolver-se em múltiplas atividades de voluntariado, em regime livre, generoso e totalmente voluntário.</p>
                <p>Para o enquadramento e articulação das ações de voluntariado, a U.Porto criou uma <strong>Comissão de Voluntariado</strong> que promoverá e divulgará junto da comunidade académica a prática do voluntariado, estabelecerá protocolos e acordos de cooperação com entidades especialmente vocacionadas para a ajuda humanitária, para o apoio a grupos sociais ou etários especialmente necessitados ou carenciados, para a promoção do sucesso escolar, da cultura e do desporto e, em geral, para o exercício da cidadania ativa e responsável da sua comunidade académica.</p>
                <p>Os programas de voluntariado reconhecidos pela U.Porto obedecerão aos princípios legais e éticos que lhe subjazem, podendo abarcar tanto atividades de curta duração associadas a objetivos específicos, como, desejavelmente, atividades mais duradouras, regulares ou contínuas, de acordo com as necessidades dos grupos sociais ou das áreas de intervenção dos voluntários e das entidades a que se venham a associar.</p>
                <p>Entende-se que o verdadeiro voluntariado deve ser exercido sem ser esperada qualquer Compensação em troca. Contudo, considera-se adequado que seja certificado, especialmente aos estudantes, o exercício de ações de voluntariado devidamente reconhecidas pela U.Porto, em particular através da devida menção no suplemento ao diploma, desde que cumpridos os critérios exigidos no Despacho Reitoral aplicável (<strong>Despacho Reitoral nº GR.03/02/2010</strong>).</p>
                <p><strong>Ser voluntário na U.Porto</strong> implica, quer para as entidades de acolhimento, quer para o voluntário, a assunção de um compromisso, de acordo com os princípios prosseguidos pela U.Porto.</p>
            </section>
        </section>

	</div>
	

@stop
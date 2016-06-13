@extends('master')

@section('main_content')
	
	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Atividades" />
			</section>
			
			<section class="sidebar-categories">
				<span class="sidebar-title">categorias</span>
				<a>Angariação de fundos</a>
				<a>Recolha de alimentos</a>
				<a>Doações</a>
				<a>Proteger o Planeta</a>
				<a>Preservar a herança cultural</a>
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
				<h4><a class="active">Atividades</a></h4>
			</section>
            
			<section class="main-section">
				<h2 class="title">Atividades</h2>
			</section>
            
            <section class="img-section">
                <img class="img img-responsive img-activities" src="/src/imgs/voluntariado_atividades.jpg">
            </section>
            
            <section class="text-section">
                <p>Poderá também envolver-se na nossa rede global de grupos, organizar um evento ou ser orador num evento. Ou pode ajudar-nos a organizar um evento de <strong>angariação de fundos</strong>.</p>
                <p>Como é que a sua <strong>doação</strong> será utilizada? Se preferir pode realizar uma doação geral que será alocada às situações que a U.Porto considerar mais importantes. Alternativamente, pode escolher doar a uma escola ou um projeto da Universidade que pode corresponder aos seus interesses ou refletir os seus estudos passados ou carreira profissional atual. Áreas tão diversas como a educação, ambiente, inovação, saúde ou cultura podem ser impulsionadas com a sua ajuda.</p>
                <p>Com a sua doação pode, por exemplo, ajudar os nossos estudantes mais brilhantes a dar o seu melhor, pode ajudar a proteger o nosso frágil planeta, pode ajudar as boas ideias a fazer crescer a economia, pode ajudar a solucionar os problemas de saúde do mundo ou pode também ajudar a preservar a nossa herança cultural.</p>
                <p>Ao voluntariar-se na U.Porto, terá a oportunidade de retribuir para a sua Universidade, dando à próxima geração de graduados da U.Porto e aos recém-graduados, um valor acrescentado que permitirá fortalecer a sua rede de contatos e ganhar uma experiência valiosa de voluntariado. Existem várias oportunidades de participar em atividades de voluntariado em todo o mundo ou simplesmente a partir do conforto da sua própria casa.</p>
                <p>Também poderá fazer <strong>recolhas</strong> de alimentos, roupa, brinquedos, livros, produtos para animais e produtos de higiene pessoal.</p>
            </section>
        </section>

	</div>
	
	<!-- Body -->
	<div class="container mobile-container visible-xs">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left sidebar-left-xs" style="display: none;">
			
			<!-- Search -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Atividades" />
			</section>
			
			<section class="sidebar-categories">
				<span class="sidebar-title">categorias</span>
				<a>Angariação de fundos</a>
				<a>Recolha de alimentos</a>
				<a>Doações</a>
				<a>Proteger o Planeta</a>
				<a>Preservar a herança cultural</a>
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
				<h4><a class="active">Atividades</a></h4>
			</section>
            
			<section class="main-section">
				<h2 class="title">Atividades</h2>
			</section>
            
            <section class="img-section">
                <img class="img img-responsive img-activities" src="/src/imgs/voluntariado_atividades.jpg">
            </section>
            
            <section class="text-section">
                <p>Poderá também envolver-se na nossa rede global de grupos, organizar um evento ou ser orador num evento. Ou pode ajudar-nos a organizar um evento de <strong>angariação de fundos</strong>.</p>
                <p>Como é que a sua <strong>doação</strong> será utilizada? Se preferir pode realizar uma doação geral que será alocada às situações que a U.Porto considerar mais importantes. Alternativamente, pode escolher doar a uma escola ou um projeto da Universidade que pode corresponder aos seus interesses ou refletir os seus estudos passados ou carreira profissional atual. Áreas tão diversas como a educação, ambiente, inovação, saúde ou cultura podem ser impulsionadas com a sua ajuda.</p>
                <p>Com a sua doação pode, por exemplo, ajudar os nossos estudantes mais brilhantes a dar o seu melhor, pode ajudar a proteger o nosso frágil planeta, pode ajudar as boas ideias a fazer crescer a economia, pode ajudar a solucionar os problemas de saúde do mundo ou pode também ajudar a preservar a nossa herança cultural.</p>
                <p>Ao voluntariar-se na U.Porto, terá a oportunidade de retribuir para a sua Universidade, dando à próxima geração de graduados da U.Porto e aos recém-graduados, um valor acrescentado que permitirá fortalecer a sua rede de contatos e ganhar uma experiência valiosa de voluntariado. Existem várias oportunidades de participar em atividades de voluntariado em todo o mundo ou simplesmente a partir do conforto da sua própria casa.</p>
                <p>Também poderá fazer <strong>recolhas</strong> de alimentos, roupa, brinquedos, livros, produtos para animais e produtos de higiene pessoal.</p>
            </section>
        </section>

	</div>

@stop
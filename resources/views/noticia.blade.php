@extends('master')

@section('title')
	<title>Notícia {{$noticia->title}}</title>
@stop

@section('tab_selector')
	<script type="text/javascript">updateHeader('noticias');</script>
@stop

@section('main_content')

    <div class="container hidden-xs" id="container-left">

        <section class="sidebar-left">
            
            <section> 
                <span class="sidebar-title">pesquisar</span>
                <input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar  Notícia ou Tema" />
            </section>
            
            <section class="sidebar-categories">
                <span class="sidebar-title">categorias</span>
                @foreach ($orgs as $org) 
                <a href="/organizacao/{{ $org->name }}">{{ $org->name }}</a>
                 @endforeach
            </section>
            
            <section>
                <span class="sidebar-title">oportunidades</span>
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
        
        <section class="main-container">
		
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h3>
				<span>/</span>
				<h4><a href="/noticias">Notícias</a></h4>
				<span>/</span>
				<h4><a class="active">{{ $noticia->title }}</a></h4>
			</section>
			
			<section class="main-section news-container">
				<section class="main-section news-section">
					<section class="news-header">
						<h3 class="news-header-title">{{ $noticia->title }}</h3>
						<section class="news-authors-date">
							<span class="news-authors">{{ $noticia->title }}</span>
							<span class="news-date">{{ $noticia->date }}</span>
						</section>
					</section>
					<section class="news-longer">
						<div>
							<section class="news-img">
								<img class="img-responsive" src="/{{ $noticia->location }}">
							</section>
							<section class="news-text">
								{!! $noticia->description !!}
							</section>
						</div>
					</section>
				</section>
				<section class="news-social-networks">
					<span class="news-social-networks-span">Partilhar:</span>
					<ul class="social-networks">
						<li><a><img src="/src/imgs/fb_logo.png"></a></li>
						<li><a><img src="/src/imgs/twitter_logo.png"></a></li>
						<li><a><img src="/src/imgs/google_plus_logo.svg"></a></li>
						<li><a><img src="/src/imgs/linkedin_logo.png"></a></li>
					</ul>
				</section>
			</section>
		</section>
    </div>
    
    <div class="container mobile-container visible-xs">

        <section class="sidebar-left sidebar-left-xs" style="display: none;">
            
            <section> 
                <span class="sidebar-title">pesquisar</span>
                <input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar  Notícia ou Tema" />
            </section>
            
            <section class="sidebar-categories">
                <span class="sidebar-title">categorias</span>
                <a>AJUDARIS</a>
                <a>Cura+</a>
                <a>S. C. Cruz IPSS</a>
                <a>MIACIS</a>
                <a>G.A.S. Porto</a>
                <a>U.Dream</a>
                <a>MOA de Portugal</a>
                <a class="active">Banco Alimentar</a>
                <a>Intercultura-AFS</a>
                <a>G.A.S Africa</a>
                <a>MOVE</a>
                <a>MHNC-UP</a>
                <a>Leigos para o desenvolvimento</a>
                <a>Câmara Municipal do Porto</a>
                <a>Vo.U</a>
                <a>Casa Museu Abel Salazar</a>
                <a>CDUP</a>
                <a>Mundo a Sorrir</a>
                <a>NASA</a>
                <a>Free Hugs</a>
                <a>Cidade Mais+</a>
                <a>FAP no Bairro</a>
                <a>UCC Boavista</a>
                <a>MIDAS</a>
                <a>Casa Ronald McDonald do Porto</a>
            </section>
            
            <section>
                <span class="sidebar-title">oportunidades</span>
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
        
        <section class="container">
		
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h3>
				<span>/</span>
				<h4><a href="/noticias">Notícias</a></h4>
				<span>/</span>
				<h4><a class="active">{{ $noticia->title }}</a></h4>
			</section>
			
			<section class="main-section news-container">
				<section class="main-section news-section">
					<section class="news-header">
						<h3 class="news-header-title">{{ $noticia->title }}</h3>
						<section class="news-authors-date">
							<span class="news-authors">{{ $noticia->title }}</span>
							<span class="news-date">{{ $noticia->date }}</span>
						</section>
					</section>
					<section class="news-longer">
						<div>
							<section class="news-img">
								<img class="img-responsive" src="/{{ $noticia->location }}">
							</section>
							<section class="news-text">
								{!! $noticia->description !!}
							</section>
						</div>
					</section>
				</section>
				<section class="news-social-networks">
					<span class="news-social-networks-span">Partilhar:</span>
					<ul class="social-networks">
						<li><a><img src="/src/imgs/fb_logo.png"></a></li>
						<li><a><img src="/src/imgs/twitter_logo.png"></a></li>
						<li><a><img src="/src/imgs/google_plus_logo.svg"></a></li>
						<li><a><img src="/src/imgs/linkedin_logo.png"></a></li>
					</ul>
				</section>
			</section>
		</section>
    </div>
	
@stop
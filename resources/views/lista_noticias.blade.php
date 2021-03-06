@extends('master')

@section('title')
	<title>Notícias</title>
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
					<a href="./organizacao/{{ $org->name }}">{{ $org->name }}</a>
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
                <h4><a class="active">Notícias</a></h4>
            </section>
			
			<!-- Noticia Aqui -->
			<section class="main-section news-container">
				@foreach ($noticias as $noticia)   
				<section class="main-section news-section">
					<section class="news-header">
						<a href="/noticia/{{$noticia->title}}"><h3 class="news-header-title">{{ $noticia->title }}</h3></a>
						<section class="news-authors-date">
							<span class="news-authors">{{ $noticia->title }}</span>
							<span class="news-date">{{ $noticia->date }}</span>
						</section>
					</section>
					<section class="news-longer">
						<div>
							<section class="news-img">
								<a href="/noticia/{{ $noticia->title }}">
									<img class="img-responsive" src="/{{ $noticia->location }}">
								</a>
							</section>
							<section class="news-text">
								{!! $noticia->description !!}
							</section>
						</div>
					</section>
				</section>
				<section class="news-view-more">
					<a href="/noticia/{{ $noticia->title }}">Ver mais...</a>
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
				@if ($noticia != end($noticias)) <hr>@endif
				@endforeach
			</section>
		</section>
    </div>
    
    <div class="container mobile-container visible-xs">

        <section class="sidebar-left sidebar-left-xs" style="display:none;">
            
            <section> 
                <span class="sidebar-title">pesquisar</span>
                <input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar  Notícia ou Tema" />
            </section>
            
            <section class="sidebar-categories">
                <span class="sidebar-title">categorias</span>
                @foreach ($orgs as $org) 
					<a href="./organizacao/{{ $org->name }}">{{ $org->name }}</a>
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
        
        <section class="container">
		
            <section class="title-section">
                <h4><a href="/">U.Porto Voluntariado</a></h3>
                <span>/</span>
                <h4><a class="active">Notícias</a></h4>
            </section>
           
			<!-- Noticia Aqui -->
			<section class="main-section news-container">
				@foreach ($noticias as $noticia)   
				<section class="main-section news-section">
					<section class="news-header">
						<a href="/noticia/{{$noticia->title}}"><h3 class="news-header-title">{{ $noticia->title }}</h3></a>
						<section class="news-authors-date">
							<span class="news-authors">{{ $noticia->title }}</span>
							<span class="news-date">{{ $noticia->date }}</span>
						</section>
					</section>
					<section class="news-longer">
						<div>
							<section class="news-img">
								<a href="/noticia/{{ $noticia->title }}">
									<img class="img-responsive" src="/{{ $noticia->location }}">
								</a>
							</section>
							<section class="news-text">
								{!! $noticia->description !!}
							</section>
						</div>
					</section>
				</section>
				<section class="news-view-more">
					<a href="/noticia/{{ $noticia->title }}">Ver mais...</a>
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
				@if ($noticia != end($noticias)) <hr>@endif
				@endforeach
			</section>
		</section>
    </div>
    
@stop
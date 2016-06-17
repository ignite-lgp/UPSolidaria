@extends('master')

@section('title')
	<title>UP Solidária</title>
@stop

@section('main_content')

    <div class="container hidden-xs" id="container-left">

		<section class="sidebar-left">
			
			<section> 
                <span class="sidebar-title">pesquisar</span>
                <input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Atividades" />
            </section>
			
			<section class="sidebar-categories">
				<span class="sidebar-title">categorias</span>
                 @foreach ($orgs as $org) 
                <a href="./organizacao/{{ $org->name }}">{{ $org->name }}</a>
                 @endforeach
			</section>
		
            @include('partials/auth') 
		
    	</section>
    		
		<section class="main-container">
		
			<section class="title-section">
				<h2>Bem-vindos à plataforma de Voluntariado da UP!</h2>
			</section>
			
			<!--@foreach ($noticias as $noticia)  
			<section class="main-section news-group">
				<article class="news">
					<section class="news-img">
						<img class="img-responsive" src="/src/imgs/up.jpg">
					</section>
					<section class="news-title-section">
						<a href="/noticia/{{$noticia->title}}"><h4 class="news-title-l">{{ $noticia->title }}</h4></a>
					</section>
					<section class="news-text">
						{{ $noticia->description }}
					</section>
					<section class="news-view-more">
						<a class="red-link">Ver mais...</a>
					</section>
				</article>
			</section>

			@endforeach-->
			<section class="main-section news-container">
				@foreach ($noticias as $noticia)   
				<section class="main-section news-section">
					<h3 class="news-header-title">{{ $noticia->title }}</h3>
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
				<section class="news-view-more">
					<a href="/noticia/{{ $noticia->title }}">Ver mais...</a>
				</section>
				@if ($noticia != end($noticias)) <hr>@endif
				@endforeach
			</section>
        
		</section>

    </div>
	
	<!-- MOBILE Body -->
	<div class="container mobile-container visible-xs">
		
		<section class="sidebar-left sidebar-left-xs" style="display: none;">
			
			<section> 
                <span class="sidebar-title">pesquisar</span>
                <input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Atividades" />
            </section>
			
			<section class="sidebar-categories">
				<span class="sidebar-title">categorias</span>
                 @foreach ($orgs as $org) 
                <a href="./organizacao/{{ $org->name }}">{{ $org->name }}</a>
                 @endforeach
			</section>
		
            @include('partials/auth') 
		
    	</section>
    		
		<section class="container">
		
			<section class="title-section">
				<h2>Bem-vindos à plataforma de Voluntariado da UP!</h2>
			</section>
			
			@foreach ($noticias as $noticia)  
			<!--@foreach ($noticias as $noticia)  
			<section class="main-section news-group">
				<article class="news">
					<section class="news-img">
						<img class="img-responsive" src="/src/imgs/up.jpg">
					</section>
					<section class="news-title-section">
						<a href="/noticia/{{$noticia->title}}"><h4 class="news-title-l">{{ $noticia->title }}</h4></a>
					</section>
					<section class="news-text">
						{{ $noticia->description }}
					</section>
					<section class="news-view-more">
						<a class="red-link">Ver mais...</a>
					</section>
				</article>
			</section>

			@endforeach-->
			<section class="main-section news-container">
				@foreach ($noticias as $noticia)   
				<section class="main-section news-section">
					<h3 class="news-header-title">{{ $noticia->title }}</h3>
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
				<section class="news-view-more">
					<a href="/noticia/{{ $noticia->title }}">Ver mais...</a>
				</section>
				@if ($noticia != end($noticias)) <hr>@endif
				@endforeach
			</section>
			@endforeach
        
		</section>
	</div>
	<!-- END of Mobile Body-->

@stop
    

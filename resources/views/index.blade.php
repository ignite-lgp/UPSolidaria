@extends('master')

@section('main_content')

    <div class="container hidden-xs" id="container-left">

		<section class="sidebar-left">
			
			<section> 
                <span class="sidebar-title">pesquisar</span>
                <input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Atividades" />
            </section>
			
			<section class="sidebar-categories hidden-xs">
				<span class="sidebar-title">categorias</span>
                 @foreach ($orgs as $org) 
                <a href="./organizacao/{{ $org->name }}">{{ $org->name }}</a>
                 @endforeach
			</section>
		
            @include('partials/auth') 
		
    		</section>
    		
    		<section class="main-container hidden-xs">
    			<section class="main-title-section hidden-xs">
    				<h2 class="main-title">Bem-vindos à plataforma de Voluntariado da UP!</h2>
    			</section>
                
                @foreach ($noticias as $noticia)  
                <section class="news-group">
                    <article class="news">
                        <section class="news-img">
                            <img class="img-responsive" src="/src/imgs/up.jpg">
                        </section>
                        <section class="news-title-section">
                            <h4 class="news-title-l">{{ $noticia->title }}</h4>
                        </section>
                        <section class="news-text">
                            {{ $noticia->title }}
                        </section>
                        <section class="news-view-more">
                            <span class="red-text span-view-more">Ver mais...</span>
                        </section>
                    </article>
                </section>
                <br>
                @endforeach
            

    </div>
    
    </section>

@stop
    

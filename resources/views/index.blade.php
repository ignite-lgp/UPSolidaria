@extends('master')

@section('main_content')

    <div class="container hidden-xs" id="container-left">

		<section class="sidebar-left">
			
			<section class="sidebar-search-bar hidden-xs"> 
				<span id="search-bar-title">pesquisar</span>
				<input id="search-bar-input" type="text" name="activities" placeholder="Pesquisar Atividades" />
			</section>
			
			<section class="sidebar-categories hidden-xs">
				<span id="categories-title">categorias</span>
				<span>AJUDARIS</span>
				<span>Cura+</span>
				<span>S. C. Cruz IPSS</span>
				<span>MIACIS</span>
				<span>G.A.S. Porto</span>
				<span>U.Dream</span>
				<span>MOA de Portugal</span>
				<span>Banco Alimentar</span>
				<span>Intercultura-AFS</span>
				<span>G.A.S Africa</span>
				<span>MOVE</span>
				<span>MHNC-UP</span>
				<span>Leigos para o desenvolvimento</span>
				<span>Câmara Municipal do Porto</span>
				<span>Vo.U</span>
				<span>Casa Museu Abel Salazar</span>
				<span>CDUP</span>
				<span>Mundo a Sorrir</span>
				<span>NASA</span>
				<span>Free Hugs</span>
				<span>Cidade Mais+</span>
				<span>FAP no Bairro</span>
				<span>UCC Boavista</span>
				<span>MIDAS</span>
				<span>Casa Ronald McDonald do Porto</span>
			</section>
			
			<section class="sidebar-auth hidden-xs">
				<span id="authentication-title">autenticação</span>
                {!! Form::open(array('url' => '/auth/login', 'method' => 'POST')) !!}
                    {!! Form::text('username','', array('class' => 'auth-input', 'placeholder' => 'Utilizador')) !!}
                    {!! Form::password('password', array('class' => 'auth-input', 'placeholder' => 'Palavra-Passe')) !!}
                    {!! Form::submit('iniciar sessão',array('class'=>'btn-auth'))!!}
                {!! Form::close() !!}
			</section>
			
			<section class="reg-data hidden-xs">
				<span id="span-bold">Registe os seus dados</span>
			</section>
		
		</section>
		
		<section class="main-container hidden-xs">
			<section class="main-title-section hidden-xs">
				<h2 class="main-title">Bem-vindos à plataforma de Voluntariado da UP!</h2>
			</section>
            
            <section class="news-group">
                <article class="news">
                    <section class="news-img">
                        <img class="img-responsive" src="/src/imgs/up.jpg">
                    </section>
                    <section class="news-title-section">
                        <h4 class="news-title-l">lorem ipsum</h4>
                    </section>
                    <section class="news-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </section>
                    <section class="news-view-more">
                        <span class="red-text span-view-more">Ver mais...</span>
                    </section>
                </article>
            </section>
        
            <section class="news-group">
                <article class="news">
                    <section class="news-img">
                        <img class="img-responsive" src="/src/imgs/capa_voluntariado.jpg">
                    </section>
                    <section class="news-title-section">
                        <h4 class="news-title-l">lorem ipsum</h4>
                    </section>
                    <section class="news-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </section>
                    <section class="news-view-more">
                        <span class="red-text span-view-more">Ver mais...</span>
                    </section>
                </article>
            </section>
        
        <section class="news-group">
            <article class="news">
                <section class="news-img">
                    <img class="img-responsive" src="src/imgs/gas_porto.png">
                </section>
                <section class="news-title-section">
                    <h4 class="news-title-l">lorem ipsum</h4>
                </section>
                <section class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                </section>
                <section class="news-view-more">
                    <span class="red-text span-view-more">Ver mais...</span>
                </section>
            </article>
        </section>

    </div>
    
    <section class="container" id="main-container-xs">
        <section class="main-container-xs visible-xs">
            <section class="main-title-section-xs">
                <h3 class="main-title-xs">Bem-vindos à plataforma de Voluntariado da UP!</h4>
            </section>
        </section>
        <section class="news-group-xs visible-xs">
            <article class="news">
                <section class="news-img">
                    <img class="img-responsive news-img" src="src/imgs/up.jpg">
                </section>
                <section class="news-title">
                    <h4 class="news-title-xs">lorem ipsum</h5>
                </section>
                <section class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </section>
                <section class="news-view-more">
                    <span class="red-text span-view-more">Ver mais...</span>
                    <hr>
                </section>
            </article>
            
            <article class="news">
                <section class="news-img">
                    <img class="img-responsive news-img" src="/src/imgs/capa_voluntariado.jpg">
                </section>
                <section class="news-title">
                    <h4 class="news-title-xs">lorem ipsum</h5>
                </section>
                <section class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </section>
                <section class="news-view-more">
                    <span class="red-text span-view-more">Ver mais...</span>
                    <hr>
                </section>
            </article>
            
            <article class="news">
                <section class="news-img">
                    <img class="img-responsive news-img" src="/src/imgs/gas_porto.png">
                </section>
                <section class="news-title">
                    <h4 class="news-title-xs">lorem ipsum</h5>
                </section>
                <section class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </section>
                <section class="news-view-more">
                    <span class="red-text span-view-more">Ver mais...</span>
                    <hr>
                </section>
            </article>
        </section>
    </section>

@stop
    

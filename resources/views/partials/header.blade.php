    <body>
    
    <nav class="navbar navbar-inverse navbar-little">
        <section class="auth hidden-xs">
            <section class="auth-left">
                @if (!Session::has('email'))
                <span id="auth-span"><a href="/auth">Autenticar-se</a></span>
                @else
                <span id="auth-span"><a href="/perfil">{{ Session::get('name') }}</a></span>
                @endif
            </section>
            <section class="auth-right">
                <span id="auth-span" class="glyphicon glyphicon-lock"></i>
            </section>
        </section>
        <section class="search-visible-xs visible-xs">
            <span id="search-span" class="glyphicon glyphicon-search"></i>
        </section>
        <section class="auth-visible-xs visible-xs">
            <span id="auth-span" class="glyphicon glyphicon-lock"></i>
        </section>
        <section class="language-visible-xs visible-xs">
            <a id="language-link" href="#"><span id="language-span-capital">en</span></a>
        </section>   
        <section class="language hidden-xs">
            <a id="language-link" href="#"><span id="language-span">en</span></a>
        </section>      
    </nav>
    
    <nav class="navbar navbar-inverse navigation-gradient navbar-margin">
      <div class="container" id="container-navbar">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><img src = "/src/imgs/logo.png" id="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navigation-options">
            <li><a href="/quemsomos">quem somos</a></li>
            <li><a href="/organizacoes">organizações</a></li>
            <li><a href="/atividades">atividades</a></li>
            <li><a href="/noticias">notícias</a></li>
            <li><a href="/contatos">contactos</a></li>
          </ul>
		  <section class="search hidden-xs">
			<span id="search-icon" class="glyphicon glyphicon-search"></span>
		  </section>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
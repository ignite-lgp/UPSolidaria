<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../src/imgs/logo_upsolidaria.png">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

    <title>UP Solidária</title>

    <!-- Bootstrap core CSS -->
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../src/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../src/css/upsolidaria.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../src/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <nav class="navbar navbar-inverse navbar-little">
        <section class="auth hidden-xs">
            <section class="auth-left">
                <span id="auth-span">Autenticar-se</span>
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
          <a class="navbar-brand" href="./"><img src="../../src/imgs/logo.png" id="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navigation-options">
            <li><a href="#about">quem somos</a></li>
            <li><a href="#organizations">organizações</a></li>
            <li><a href="#activities">atividades</a></li>
            <li class="active"><a href="#news">notícias</a></li>
            <li><a href="#contacts">contactos</a></li>
          </ul>
          <section class="search hidden-xs">
            <span id="search-icon" class="glyphicon glyphicon-search"></span>
          </section>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container hidden-xs" id="container-left">

        <section class="sidebar-left">
            
            <section class="hidden-xs"> 
                <span class="sidebar-title">pesquisar</span>
                <input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar  Notícia ou Tema" />
            </section>
            
            <section class="sidebar-categories hidden-xs">
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
            
            <section class="hidden-xs">
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
            
            <section class="hidden-xs">
                <span class="sidebar-title">autenticação</span>
                <input class="auth-input" type="text" name="username" placeholder="Utilizador" />
                <input class="auth-input" type="password" name="password" placeholder="Palavra-Passe" />
                <input class="btn-auth" type="submit" name="init-session" value="iniciar sessão" />
                <br><a>Registe os seus dados</a>
            </section>
        
        </section>
        
        <section class="main-container hidden-xs">
            <section class="title-section hidden-xs">
                <h4><a>U.Porto Voluntariado</a></h3>
                <span>/</span>
                <h4><a>Notícias</a></h4>
                <span>/</span>
                <h4><a class="active">{{ $noticia->title }}</a></h4>
            </section>
            
            <section class="news-section">
                <section class="news-header">
                    <h3 class="news-header-title">{{ $noticia->title }}</h3>
                    <section class="news-authors-date">
                        <span class="news-authors">{{ $noticia->title }}</span>
                        <span class="news-date">{{ $noticia->date }}</span>
                    </section>
                </section>
                <section class="news-group-longer">
                     <article class="news-longer">
                        <section class="news-img">
                            <img class="img-responsive" src="../../src/imgs/voluntariado_up.jpg">
                        </section>
                        <section class="news-text">
                        {{ $noticia->description }}
                        </section>
                        <section class="news-social-networks">
                            <span class="news-social-networks-span">Partilhar:</span>
                            <ul class="social-networks">
                                <li><a><img src="../../src/imgs/fb_logo.png"></a></li>
                                <li><a><img src="../../src/imgs/twitter_logo.png"></a></li>
                                <li><a><img src="../../src/imgs/google_plus_logo.svg"></a></li>
                                <li><a><img src="../../src/imgs/linkedin_logo.png"></a></li>
                            </ul>
                        </section>
                     </article>
                </section>
            </section>
            
            

    </div>
    
    <section class="container" id="main-container-xs">
        <section class="main-container-xs visible-xs">
            <section class="main-title-section-xs">
                <h3 class="main-title-xs">{{ $noticia->title }}</h3>
            </section>
        </section>
        <section class="news-group-xs visible-xs">
            <article class="news">
                <section class="news-img">
                    <img class="img-responsive news-img" src="../../src/imgs/up.jpg">
                </section>
                <section class="news-title">
                    <h4 class="news-title-xs">{{ $noticia->title }}</h4>
                </section>
                <section class="news-text">
                        {{ $noticia->description }}
                </section>
                <section class="news-view-more">
                    <span class="red-text span-view-more">Ver mais...</span>
                    <hr>
                </section>
            </article>
            
            <article class="news">
                <section class="news-img">
                    <img class="img-responsive news-img" src="../../src/imgs/capa_voluntariado.jpg">
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
                    <img class="img-responsive news-img" src="../../src/imgs/gas_porto.png">
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
    
    <footer id="footer">
        <hr class="visible-xs">
        <section class="container" id="container-footer">
            <span class="hidden-xs">Copyright 2016 &copy Universidade do Porto | Termos e Condições | Acessibilidade</span>
            <span class="hidden-xs">Última atualização: 2016-04-03 Página gerada em: 2016-04-03</span>
            <span class="visible-xs">Copyright 2016 &copy UP Solidária</span>
        </section>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../src/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../src/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
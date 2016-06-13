@extends('master')

@section('main_content')

	    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
	
	<!-- WEB Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Options sample -->
			<section class="sidebar-options">
				<span class="sidebar-title">Opções</span>
				<ul>
					<li><a>Autenticação por Federação</a></li>
				</ul>
				<a class="helper">Ajuda</a>
			</section>
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container centered-container">
		
			<!-- Title -->
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><span class="red-link active">Autenticação</span></h4>
			</section>
		
			<!-- Main Body Section -->
			<section class="main-section login-auth">
					<h3>Autenticação</h3>
					{!! Form::open(array('url' => '/auth/login', 'method' => 'POST')) !!}
						{!! Form::text('username','', array('class' => 'auth-input', 'placeholder' => 'Utilizador')) !!}
						{!! Form::password('password', array('class' => 'auth-input', 'placeholder' => 'Palavra-Passe')) !!}
						{!! Form::submit('iniciar sessão',array('class'=>'btn-auth'))!!}
                	{!! Form::close() !!}
					<a>Esqueceu-se da palavra-passe? Recupere</a>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section login-separator">
					<hr/>
					<p>OU</p>
					<hr/>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section">
					<h3>Entre através de rede social</h3>
					<section class="login-social-networks">
						<ul>
							<li><a><img src="/src/imgs/fb_logo.png"></a></li>
							<li><a><img src="/src/imgs/twitter_logo.png"></a></li>
							<li><a><img src="/src/imgs/google_plus_logo.svg"></a></li>
							<li><a><img src="/src/imgs/linkedin_logo.png"></a></li>
						</ul>
					</section>
			</section>
			
			<!-- Main Body Section -->
			<section id="register" class="main-section big-separator">
					<hr/>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section login-register">
					<h2>Registe os seus dados</h2>
					<section class="not-centered">
						{!! Form::open(array('url' => '/auth/register', 'method' => 'POST')) !!}
						{!! Form::label('nome', 'Nome completo', array('class' => 'required')) !!}
						{!! Form::text('nome','', array('class' => 'reg-input')) !!}
						{!! Form::label('numero_identificacao', 'Número do documento de identificação', array('class' => 'required')) !!}
						{!! Form::text('numero_identificacao','', array('class' => 'reg-input')) !!}
						{!! Form::label('email', 'E-mail eletrónico', array('class' => 'required')) !!}
						{!! Form::email('email','', array('class' => 'reg-input')) !!}
						{!! Form::label('password', 'Password',array('class' => 'required'))!!}
						{!! Form::password('password',array('class' => 'reg-input')) !!}
						{!! Form::label('password_confirmation', 'Confirmar password',array('class' => 'required'))!!}
						{!! Form::password('password_confirmation',array('class' => 'reg-input')) !!}
						{!! Form::label('nacionalidade', 'Nacionalidade', array('class' => 'required')) !!}
						<br/>
						{!! Form::select('nacionalidade',($paises),array('class' => 'reg-input')) !!}
						<br/>
						<br/><br><br>
						{!! Form::label('localidade', 'Localidade', array('class' => 'required')) !!}
						{!! Form::text('localidade','',array('class' => 'reg-input')) !!}
						{!! Form::label('data_nascimento', 'Data de nascimento', array('class' => 'required')) !!}
						{!! Form::date('data_nascimento','',array('class' => 'reg-input')) !!}
						{!! Form::label('carta_conducao', 'Carta de condução') !!}
						{!! Form::checkbox('carta_conducao', 'value',false,array('class' => 'reg-aligned')) !!}
							<ul class="reg-buttons">
								<li><input type="reset" name="reset_form" value="Limpar registo" /></li>
								<li>{!! Form::submit('Finalizar') !!}</li>
							</ul>
						{!! Form::close() !!}
					</section>
			</section>
		</section>
		<!-- END of Main Body-->
	</div>
	<!--END of WEB Body-->
	
	<!-- MOBILE Body -->
	<div class="container mobile-container visible-xs">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left sidebar-left-xs" style="display: none;">
			<!-- Options sample -->
			<section class="sidebar-options">
				<span class="sidebar-title">Opções</span>
				<ul>
					<li><a>Autenticação por Federação</a></li>
				</ul>
				<a class="helper">Ajuda</a>
			</section>
		</section>
		<!-- Left Sidebar Over -->
		
		<!-- Main Body -->
		<section class="container centered-container">
		
			<!-- Title -->
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><span class="red-link active">Autenticação</span></h4>
			</section>
		
			<!-- Main Body Section -->
			<section class="main-section login-auth">
					<h3>Autenticação</h3>
					{!! Form::open(array('url' => '/auth/login', 'method' => 'POST')) !!}
						{!! Form::text('username','', array('class' => 'auth-input', 'placeholder' => 'Utilizador')) !!}
						{!! Form::password('password', array('class' => 'auth-input', 'placeholder' => 'Palavra-Passe')) !!}
						{!! Form::submit('iniciar sessão',array('class'=>'btn-auth'))!!}
                	{!! Form::close() !!}
					<a>Esqueceu-se da palavra-passe? Recupere</a>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section login-separator">
					<hr/>
					<p>OU</p>
					<hr/>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section">
					<h3>Entre através de rede social</h3>
					<section class="login-social-networks">
						<ul>
							<li><a><img src="/src/imgs/fb_logo.png"></a></li>
							<li><a><img src="/src/imgs/twitter_logo.png"></a></li>
							<li><a><img src="/src/imgs/google_plus_logo.svg"></a></li>
							<li><a><img src="/src/imgs/linkedin_logo.png"></a></li>
						</ul>
					</section>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section big-separator">
					<hr/>
			</section>
			
			<!-- Main Body Section -->
			<section class="main-section login-register">
					<h2>Registe os seus dados</h2>
					<section class="not-centered">
						{!! Form::open(array('url' => '/auth/register', 'method' => 'POST')) !!}
						{!! Form::label('nome', 'Nome completo', array('class' => 'required')) !!}
						{!! Form::text('nome','', array('class' => 'reg-input')) !!}
						{!! Form::label('numero_identificacao', 'Número do documento de identificação', array('class' => 'required')) !!}
						{!! Form::text('numero_identificacao','', array('class' => 'reg-input')) !!}
						{!! Form::label('email', 'E-mail eletrónico', array('class' => 'required')) !!}
						{!! Form::email('email','', array('class' => 'reg-input')) !!}
						{!! Form::label('nacionalidade', 'Nacionalidade', array('class' => 'required')) !!}
						{!! Form::select('nacionalidade',($paises),array('class' => 'reg-input')) !!}<br><br><br><br>
						{!! Form::label('localidade', 'Localidade', array('class' => 'required')) !!}
						{!! Form::text('localidade','',array('class' => 'reg-input')) !!}
						{!! Form::label('data_nascimento', 'Data de nascimento', array('class' => 'required')) !!}
						{!! Form::date('data_nascimento','',array('class' => 'reg-input')) !!}
						{!! Form::label('carta_conducao', 'Carta de condução') !!}
						{!! Form::checkbox('carta_conducao', 'value',array('class' => 'reg-aligned')) !!}
							<ul class="reg-buttons">
								<li><input type="reset" name="reset_form" value="Limpar registo" /></li>
								<li><input type="submit" name="commit_register" value="Finalizar" /></li>
							</ul>
						{!! Form::close() !!}
					</section>
			</section>
		</section>
		<!-- END of Main Body-->
	</div>
	<!-- END of Mobile Body-->
	

@stop
	

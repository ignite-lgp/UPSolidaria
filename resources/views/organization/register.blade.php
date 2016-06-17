@extends('master')

@section('title')
	<title>Registar Organização</title>
@stop

@section('tab_selector')
	<script type="text/javascript">updateHeader('organizacao');</script>
@stop

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
			<section class="sidebar-options hidden-xs">
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
				<h4><span class="red-link active">Registar Organização</span></h4>
			</section>

			<!-- Main Body Section -->
			<section class="main-section login-register">
					<h2>Registe a sua Organização</h2>
					<section class="not-centered">
						{!! Form::open(array('url' => '/org/register', 'method' => 'POST')) !!}
						{!! Form::label('name', 'Nome da Organização', array('class' => 'required')) !!}
						{!! Form::text('name','', array('class' => 'reg-input')) !!}

						{!! Form::label('address', 'Morada', array()) !!}
						{!! Form::text('address','',array('class' => 'reg-input')) !!}

						{!! Form::label('password', 'Password',array('class' => 'required'))!!}
						{!! Form::password('password',array('class' => 'reg-input')) !!}
						{!! Form::label('password_confirmation', 'Confirmar password',array('class' => 'required'))!!}
						{!! Form::password('password_confirmation',array('class' => 'reg-input')) !!}

						{!! Form::label('email', 'E-mail eletrónico', array('class' => 'required')) !!}
						{!! Form::email('email','', array('class' => 'reg-input')) !!}

						{!! Form::label('website', 'Website', array()) !!}
						{!! Form::text('website','',array('class' => 'reg-input')) !!}

						<section class="info-section">
						<h3 class="sidebar-title">Descrição da Organização</h3>
						{!! Form::textarea('description', ''); !!} 
						</section>

						{!! Form::label('phone', 'Contacto Telefónico', array()) !!}
						{!! Form::text('phone','', array('class' => 'reg-input')) !!}
						
						{!! Form::label('website', 'Website', array()) !!}
						{!! Form::text('website','',array('class' => 'reg-input')) !!}

						{!! Form::label('facebook', 'Facebook', array()) !!}
						{!! Form::text('facebook','',array('class' => 'reg-input')) !!}


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
			<section class="sidebar-options hidden-xs">
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
				<h4><span class="red-link active">Registar Organização</span></h4>
			</section>

			<!-- Main Body Section -->
			<section class="main-section login-register">
					<h2>Registe a sua Organização</h2>
					<section class="not-centered">
						{!! Form::open(array('url' => '/org/register', 'method' => 'POST')) !!}
						{!! Form::label('name', 'Nome da Organização', array('class' => 'required')) !!}
						{!! Form::text('name','', array('class' => 'reg-input')) !!}

						{!! Form::label('address', 'Morada', array()) !!}
						{!! Form::text('address','',array('class' => 'reg-input')) !!}

						{!! Form::label('password', 'Password',array('class' => 'required'))!!}
						{!! Form::password('password',array('class' => 'reg-input')) !!}
						{!! Form::label('password_confirmation', 'Confirmar password',array('class' => 'required'))!!}
						{!! Form::password('password_confirmation',array('class' => 'reg-input')) !!}

						{!! Form::label('email', 'E-mail eletrónico', array('class' => 'required')) !!}
						{!! Form::email('email','', array('class' => 'reg-input')) !!}

						{!! Form::label('website', 'Website', array()) !!}
						{!! Form::text('website','',array('class' => 'reg-input')) !!}

						{!! Form::label('mission', 'Missão da Organização', array()) !!}
						{!! Form::text('mission','', array('class' => 'reg-input')) !!}

						{!! Form::label('vision', 'Visão da Organização', array()) !!}
						{!! Form::text('vision','', array('class' => 'reg-input')) !!}

						{!! Form::label('values', 'Valores da Organização', array()) !!}
						{!! Form::text('values','', array('class' => 'reg-input')) !!}


						{!! Form::label('phone', 'Contacto Telefónico', array()) !!}
						{!! Form::text('phone','', array('class' => 'reg-input')) !!}
						
						{!! Form::label('website', 'Website', array()) !!}
						{!! Form::text('website','',array('class' => 'reg-input')) !!}

						{!! Form::label('facebook', 'Facebook', array()) !!}
						{!! Form::text('facebook','',array('class' => 'reg-input')) !!}


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
	<!-- END of Mobile Body-->

@stop
	

	@if (!Session::has('email'))
			<!-- Authentication -->
			<section>
				<span class="sidebar-title">autenticação</span>
                {!! Form::open(array('url' => '/auth/login', 'method' => 'POST')) !!}
                    {!! Form::text('username','', array('class' => 'auth-input', 'placeholder' => 'Utilizador')) !!}
                    {!! Form::password('password', array('class' => 'auth-input', 'placeholder' => 'Palavra-Passe')) !!}
                    {!! Form::submit('iniciar sessão',array('class'=>'btn-auth'))!!}
                {!! Form::close() !!}
                <a>Registe os seus dados</a>
			</section>

    @endif

 
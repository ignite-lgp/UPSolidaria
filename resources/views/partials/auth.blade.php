	@if (!Session::has('email'))
			<!-- Authentication -->
			<section>
				<span class="sidebar-title">autenticação</span>
                {!! Form::open(array('url' => '/auth/login', 'method' => 'POST')) !!}
                    {!! Form::text('username','', array('class' => 'auth-input', 'placeholder' => 'Utilizador')) !!}
                    {!! Form::password('password', array('class' => 'auth-input', 'placeholder' => 'Palavra-Passe')) !!}
                    {!! Form::submit('iniciar sessão',array('class'=>'btn-auth'))!!}
                {!! Form::close() !!}
                <a href="/auth#register">Registe os seus dados</a>
			</section>
    @else
        <section>
                <span class="sidebar-title">autenticação</span>
                <ul>
                    <li>Utilizador</li>
                    <li><a href="/perfil">{{ Session::get('name') }}</a></li>                    
                </ul>
                <a href="/logout"><button type="button" class="btn-auth">Terminar Sessao</button></a>
        </section>
    @endif

 
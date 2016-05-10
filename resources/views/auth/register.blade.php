<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::open(array('url' => '/auth/register', 'method' => 'POST')) !!}

        <p>{!! Form::label('nome', 'Nome')!!}</p>

        <p>{!! Form::text('nome') !!}</p>

        <p>{!! Form::label('nif', 'NIF')!!}</p>

        <p>{!! Form::text('nif') !!}</p>

        <p>{!! Form::label('email', 'Email')!!}</p>

        <p>{!! Form::text('email') !!}</p>

        <p>{!! Form::label('password', 'Password')!!}</p>

        <p>{!! Form::password('password') !!}</p>

        <p>{!! Form::label('password_confirmation', 'Confirmar password')!!}</p>

        <p>{!! Form::password('password_confirmation') !!}</p>

        <p>{!! Form::label('Localidade', 'localidade')!!}</p>

        <p>{!! Form::text('localidade') !!}</p>

        <p>{!! Form::label('Pais', 'nacionalidade')!!}</p>
        <p>{!! Form::select('nacionalidade',
        ($paises),
            null) !!}</p>
        <p>{!! Form::submit('Submit') !!}</p>

    {!! Form::close() !!}

</body>
</html>
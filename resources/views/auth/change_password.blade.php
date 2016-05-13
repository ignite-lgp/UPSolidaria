<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
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

    {!! Form::open(array('url' => '/auth/confirm_password', 'method' => 'POST')) !!}

        <p>{!! Form::label('password', 'Password')!!}</p>

        <p>{!! Form::password('password') !!}</p>

        <p>{!! Form::label('password_confirmation', 'Confirmar password')!!}</p>

        <p>{!! Form::password('password_confirmation') !!}</p>

        <p>{!! Form::hidden('email', $user['email']) !!}</p>

        <p>{!! Form::submit('Submit') !!}</p>


    {!! Form::close() !!}

</body>
</html>
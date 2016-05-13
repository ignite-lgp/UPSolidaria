<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recover Password</title>
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

    {!! Form::open(array('url' => '/auth/recover_pass', 'method' => 'POST')) !!}

        <p>{!! Form::label('email', 'Email')!!}</p>

        <p>{!! Form::text('email') !!}</p>

    {!! Form::close() !!}

</body>
</html>
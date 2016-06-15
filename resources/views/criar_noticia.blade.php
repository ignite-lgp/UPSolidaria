@extends('master')

@section('main_content')

	<section class="news-section">
		<section class="news-header">
			{!! Form::open(array('url' => '/createNews', 'method' => 'POST', 'files'=>true)) !!}
				{!! Form::text('title')!!}
				{!! Form::textarea('description','Escreva aqui o corpo da notícia', array('class' => 'auth-input', 'placeholder' => 'Escreva aqui o corpo da notícia')) !!}
				{!! Form::file('image') !!}
				{!! Form::submit('Criar noticia',array('class'=>'btn-auth'))!!}
            {!! Form::close() !!}
	</section>
</body>

@stop
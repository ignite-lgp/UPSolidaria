@extends('master')

@section('title')
	<title>Gerir Notícias</title>
@stop

@section('main_content')

            @foreach ($noticias as $noticia)       
            <section class="news-section">
                <section class="news-header">
                    <h3 class="news-header-title">{{ $noticia->title }}</h3>
                    <section class="news-authors-date">
                        <span class="news-date">{{ $noticia->date }}</span>
                    </section>
					{{ Form::open(['route' => ['DeleteNews.route', $noticia->id], 'method' => 'delete']) }}
						<button type="submit">Delete</button>
					{{ Form::close() }}
            </section>
            @endforeach
	</body>
@stop
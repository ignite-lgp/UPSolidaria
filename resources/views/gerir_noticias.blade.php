@extends('master')

@section('main_content')

            @foreach ($noticias as $noticia)       
            <section class="news-section">
                <section class="news-header">
                    <h3 class="news-header-title">{{ $noticia->title }}</h3>
                    <section class="news-authors-date">
                        <span class="news-date">{{ $noticia->date }}</span>
                    </section>
            </section>
            @endforeach
	</body>

@stop
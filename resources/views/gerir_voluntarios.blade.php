@extends('master')

@section('main_content')

            @foreach ($voluntarios as $voluntario)       
            <section class="news-section">
                <section class="news-header">
                    <h3 class="news-header-title">{{ $voluntario->name }}</h3>
                    <section class="news-authors-date">
                        <span class="news-authors">{{ $voluntario->confirm_date }}</span>
                    </section>
            </section>
            @endforeach
@stop
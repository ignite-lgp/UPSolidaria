@extends('master')

@section('main_content')

            @foreach ($voluntarios as $voluntario)       
            <section class="news-section">
                <section class="news-header">
                    <h3 class="news-header-title">{{ $voluntario->name }}</h3>
                    <section class="news-authors-date">
                        <span class="news-authors">{{ $voluntario->confirm_date }}</span>
                    </section>
					{{ Form::open(['route' => ['DeleteVolunteer.route', $voluntario->id], 'method' => 'delete']) }}
						<button type="submit">Delete</button>
					{{ Form::close() }}
            </section>
            @endforeach
@stop
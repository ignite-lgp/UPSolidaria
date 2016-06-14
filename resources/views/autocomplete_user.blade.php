@extends('master')

@section('main_content')

{{ Form::open(array('url' => '/adicionaVoluntario', 'method' => 'post'))}}
{{  Form::label('auto', 'Nome: ') }}
{{  Form::text('auto', '', array('id' => 'auto'))}}
{{  Form::close() }}

<script src="/src/js/ie10-viewport-bug-workaround.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="/src/js/search_user.js"></script>

@stop
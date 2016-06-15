@extends('master')

@section('main_content')

	<section class="news-section">
		<section class="news-header">
			{{ Form::open(array('action' => 'Geral\NewsController@createNews')) }}
			
			<textarea form="createNews">Easy! You should check out MoxieManager!</textarea>
			<input type="file" name="picture" accept="image/*">
			<button type="submit">Criar Notícia!</button>
			
			{{ Form.close()}}
	</section>

</body>

@stop
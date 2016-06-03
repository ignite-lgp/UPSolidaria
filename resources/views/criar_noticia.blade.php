@extends('master')

@section('main_content')

	<section class="news-section">
		<section class="news-header">
			{!! Form::open(
			array(
			'route' => 'admin.products.store', 
			'class' => 'form', 
			'novalidate' => 'novalidate', 
			'files' => true)) !!}

			<textarea form="createNews">Easy! You should check out MoxieManager!</textarea>
			<input type="file" name="picture" accept="image/*">
			<button type="submit">Criar Notícia</button>
	</section>

</body>

@stop
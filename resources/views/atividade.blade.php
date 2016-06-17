@extends('master')

@section('title')
	<title>Atividade {{ $info->name }}</title>
@stop

@section('tab_selector')
	<script type="text/javascript">updateHeader('organizacoes');</script>
@stop

@section('main_content')

	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search sample -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Organizações" />
			</section>

			@if ($admin)
			<!-- Admin section -->
				<section class="sidebar-listing">
					<span class="sidebar-title">Administrador</span>
					<ul>
						<li><a onclick="changeInfo();">Editar Informações</a></li>
						<li><a onclick="addMembers()">Gerir Membros da Atividade</a></li>
					</ul>
				</section>
				<section class="sidebar-listing">
					<span class="sidebar-title">Gerir Atividade</span>
					<ul>
						<li><a class="manage-volunteers">Apagar Atividade</a></li>
					</ul>
				</section>
			@endif
			
			@include('partials/auth') 
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container">
			
			<!-- Title -->
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><a href="/organizacoes">Organizações</a></h4>
				<span>/</span>
				<h4><a href="/organizacao/{{ $info->oname }}">{{ $info->oname }}</a></h4>
				@if ($inGroup)
					<span>/</span>
					<h4><a href="/organizacao/{{ $info->oname }}/grupo/{{ $info->gname }}">{{ $info->gname }}</a></h4>
				@endif
				<span>/</span>
				<h4><a class="active">{{ $info->name }}</a></h4>
      		</section>

      		<section class="activity-section">
	      		<!-- Organization Section -->
				<section class="main-section">
					<h3>{{ $info->name }}</h3>
	      		</section>
				

				<section class="main-section">
					<img class="img img-responsive org-img" src="/src/imgs/capagrupo.png">
				</section>
				
				<section class="main-section">
					<h4>Descrição</h4>
					<p>{{ $info->description }}</p>
				</section>
				
				<section class="main-section">
					<h4>Localização espacial</h4>
					<a href="http://maps.google.com/?q=FEUP" target="_blank">Uranus</a>
					<div id="map" style="width: 600px; height: 350px; background-color: #A8A8A8; border: 1px solid #CCC;"></div>
					<!--<form method="post">
						<input type="text" id="lat" readonly="yes" hidden="hidden">
						<input type="text" id="lng" readonly="yes" hidden="hidden">
					</form>
					<input id="pac-input" class="controls" type="text" placeholder="Search Box">
					<div id="map2" style="width: 600px; height: 450px; background-color: #A8A8A8; border: 1px solid #CCC;"></div>-->
				</section>
				
				<section class="main-section">
					<h4>Localização temporal</h4>
					<p>Início: {{ $info-> init_date}}</p>
					<p>Fim: {{ $info-> end_date}}</p>
				</section>
			</section>

			<section class="main-section activity-section-add-user" style="display: none;">
				<h3 class="title">Adicionar Atividade</h3>

				
     		</section>
		</section>
	</div>



    <script src="/src/js/activity_page.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false">
	</script>
	<script>

		function initMap(){
			
			var latitude = 41.1770575;
			var longitude = -8.5976375;
			var coords = new google.maps.LatLng(latitude, longitude);

			var mapOptions = {
				zoom: 16,
				center: coords,
				mapTypeControl: true,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			//create the map, and place it in the HTML map div
			map = new google.maps.Map( document.getElementById("map"), mapOptions );

			//place the initial marker
			var marker = new google.maps.Marker({
				position: coords,
				map: map,
				title: "{{ $info->name }}"
			});
		}
		
		function initAutocomplete() {
		  var map = new google.maps.Map(document.getElementById('map2'), {
			center: {lat: 41.1770573, lng: -8.5976375},
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		  });

		  // Create the search box and link it to the UI element.
		  var input = document.getElementById('pac-input');
		  var searchBox = new google.maps.places.SearchBox(input);
		  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

		  // Bias the SearchBox results towards current map's viewport.
		  map.addListener('bounds_changed', function() {
			searchBox.setBounds(map.getBounds());
		  });

		  var markers = [];
		  // Listen for the event fired when the user selects a prediction and retrieve
		  // more details for that place.
		  searchBox.addListener('places_changed', function() {
			var places = searchBox.getPlaces();

			if (places.length == 0) {
			  return;
			}

			// Clear out the old markers.
			markers.forEach(function(marker) {
			  marker.setMap(null);
			});
			markers = [];

			// For each place, get the icon, name and location.
			var bounds = new google.maps.LatLngBounds();
			places.forEach(function(place) {
			  var icon = {
				url: place.icon,
				size: new google.maps.Size(71, 71),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(17, 34),
				scaledSize: new google.maps.Size(25, 25)
			  };

			  // Create a marker for each place.
			  markers.push(new google.maps.Marker({
				map: map,
				icon: icon,
				title: place.name,
				position: place.geometry.location
			  }));

			  if (place.geometry.viewport) {
				// Only geocodes have viewport.
				bounds.union(place.geometry.viewport);
			  } else {
				bounds.extend(place.geometry.location);
			  }
			});
			map.fitBounds(bounds);
		  });
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap"
        async defer></script>
@stop
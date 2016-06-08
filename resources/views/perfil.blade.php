@extends('master')

@section('main_content')

	<!-- Body -->
	<div class="container hidden-xs" id="container-left">
		
		<!-- Left Sidebar -->
		<section class="sidebar-left">
			
			<!-- Search -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Pessoa" />
			</section>
			
			<!-- Options -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Opções</span>
				<ul>
					<li><a>Ver lista voluntários</a></li>
					<li><a>Atribuir crachás</a></li>					
					<li><a>Ver horário</a></li>
                    <li><a>Reconhecimentos</a></li>
                    <li><a>Pedir certificados</a></li>
                    <li><a>Requerimentos</a></li>
				</ul>
			</section>
			
            <!-- My Organizations -->
			<section class="sidebar-listing">
				<span class="sidebar-title">As Minhas Organizações</span>
				<ul>
					<li><a>G.A.S. Porto</a></li>
					<li><a>Banco Alimentar</a></li>					
					<li><a>VO.U. Associação de Voluntariado Universitário</a></li>
                    <li><a>Free Hugs</a></li>
				</ul>
                <br>
                <ul>
                    <li>
                        <i class="glyphicon glyphicon-plus"></i>
                        <a>Criar organização</a>
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-paperclip"></i>
                        <a>Aderir a organização</a>
                    </li>
                </ul>
			</section>
            
			<!-- Events -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Eventos</span>
				<ul>
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Angariação de fundos</a>
					</li>
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Recolha de alimentos</a>
					</li>					
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Recolha do lixo da praia</a>
					</li>
				</ul>
			</section>
			
			@include('partials/auth') 
			
		</section>
		<!-- Left Sidebar Over -->
		
		
		<!-- Main Body -->
		<section class="main-container">
		
			<!-- Title -->
			<section class="title-section hidden-xs">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><a>Conta</a></h4>
				<span>/</span>
				<h4><a class="active">Voluntário</a></h4>
			</section>
			
			<section class="main-section">
				<h3>Voluntário</h3>
			</section>
			
			<section class="main-section volunteer-basic-info">
                <div class="row volunteer-row">
                    <div class="col-md-3 col-sm-6">
                        <img class="img img-responsive volunteer-img" src="/src/imgs/volunteers/stevejobs.jpg">
                    </div>
                    
                    <div class="col-md-8 col-sm-6">
                        <h4 class="title-volunteer"><a>{{ $profile->name }}</a></h4>
                        
                        <div class="volunteer-info">
                            <span>Email:</span> 
                            <a class="red-link">{{ $profile->email }}</a>
                        </div>
                        
                        <div class="volunteer-info">
                            <span>Estatuto:</span> 
                            <span>--->Docente<---</span>
                        </div>
                        
                        <div class="volunteer-info">
                            <span>Localidade:</span> 
                            <span>{{ $profile->localidade }}, {{ $profile->country }}</span>
                        </div>
 
                        <div class="volunteer-info">
                            <span>Ano de inscrição no voluntariado:</span> 
                            <span>{{ $profile->created_at }}</span>
                        </div>
                    </div>
                </div>
                
                <section class="small-info">
                    <span class="dark-info">Nível:</span>
                    <span class="light-red-info">{{ $profile->current_level }}</span>
                </section>
                
                <section class="small-info">
                    <span class="dark-info">Pontos:</span>
                    <span class="light-red-info">{{ $profile->current_points }}</span>
                    <span class="dark-info">/</span>
                    <span class="dark-red-info">{{ $profile->next_lower_limit }}</span>
                </section>
                
                <section class="medium-info">
                    <span class="medium-dark-info">Disponibilidade</span>
                    <div class="round-rectangle">
                        @if ($profile->available == true)
                        <span class="green-circle"></span>
                        @else
                        <span class="red-circle"></span>
                        @endif
                    </div>
                </section>
				
				<section class="main-section volunteer-menu visible-md visible-lg">
					<div class="row volunteer-menu-row">
						<div class="Orga profile_tab_header col-md-3 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Orga', 'Orga_tab');">Organizações</a></span>
						</div>
						<div class="Atividade profile_tab_header col-md-3 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Atividade', 'Atividade_tab');">Atividades</a></span>
						</div>
						<div class="Cracha profile_tab_header col-md-3 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Cracha', 'Cracha_tab');">Crachás</a></span>
						</div>
						<div class="Trofeu profile_tab_header col-md-3 volunteer-menu-col active">
							<span class="dark-info"><a onclick="openProfileTab('Trofeu', 'Trofeu_tab');">Troféus</a></span>
						</div>
					</div>
				</section>
				
				<section class="volunteer-menu visible-sm">
					<div class="row volunteer-menu-row">
						<div class="Orga profile_tab_header col_sm_6 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Orga', 'Orga_tab');">Organizações</a></span>
						</div>
						<div class="Atividade profile_tab_header col_sm_6 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Atividade', 'Atividade_tab');">Atividades</a></span>
						</div>
						<div class="Cracha profile_tab_header col_sm_6 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Cracha', 'Cracha_tab');">Crachás</a></span>
						</div>
						<div class="Trofeu profile_tab_header col_sm_6 volunteer-menu-col active">
							<span class="dark-info"><a onclick="openProfileTab('Trofeu', 'Trofeu_tab');">Troféus</a></span>
						</div>
					</div>
				</section>
				
				<section class="Trofeu_tab profile_tab_body_md_lg volunteer-menu-collectibles visible-md visible-lg">
					<div class="row volunteer-menu-row">
						@foreach ($trofeus as $trof)
						<div class="col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/trophies/dedication.png" alt="{{ $trof->description}}">
							<div class="trophy">
								<span class="trophies capital strong">{{ $trof->trofeus }} troféus</span>
								<br>
								<span class="trophies short">{{ $trof->name}}</span>
							</div>
						</div>
						@endforeach
					</div>
				</section>
				
				<section class="Trofeu_tab profile_tab_body_sm volunteer-menu-collectibles visible-sm">
					<div class="row volunteer-menu-row">
						@foreach ($trofeus as $trof)
						<div class="col-sm-6 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/trophies/dedication.png" alt="{{ $trof->description}}">
							<div class="trophy">
								<span class="trophies capital strong">{{ $trof->trofeus }} troféus</span>
								<br>
								<span class="trophies short">{{ $trof->name}}</span>
							</div>
						</div>
						@endforeach
					</div>
				</section>
				
				<section class="Orga_tab profile_tab_body volunteer-organizations " style="display: none;">

					@foreach ($organizations as $org)
                    <article class="volunteer-organization">
                        <div class="volunteer-organization-left">
                            <img class="img img-responsive volunteer-organization-img" src="{{ $org->image}}">
                        </div>
                        <div class="volunteer-organization-right">
                            <a href="/organizacao/{{$org->name}}" class="red-link block">{{ $org->name }}</a>
                            <span class="block">{{ $org->reg_date }} @if ($org->leave_date == null ) - Presente @else - {{ $org->leave_date }} @endif</span>
                        </div>
                    </article>
                    @endforeach
                </section>
				
				<section class="Cracha_tab profile_tab_body_md_lg volunteer-menu-collectibles " style="display: none;">
					<div class="row volunteer-menu-row">
						@foreach ($medals as $medal)
						<div class="col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/badges/dedication.PNG" alt="{{ $medal->description}}">
							<div class="trophy">
								<span class="trophies capital strong">{{ $medal->medalhas}} crachás</span>
								<br>
								<span class="trophies short">{{ $medal->name}}</span>
							</div>
						</div>
						@endforeach
					</div>
				</section>
				
				<section class="Cracha_tab profile_tab_body_sm volunteer-menu-collectibles " style="display: none;">
					<div class="row volunteer-menu-row">
						@foreach ($medals as $medal)
						<div class="col-sm-6 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/badges/dedication.PNG" alt="{{ $medal->description}}">
							<div class="trophy">
								<span class="trophies capital strong">{{ $medal->medalhas}} crachás</span>
								<br>
								<span class="trophies short">{{ $medal->name}}</span>
							</div>
						</div>
						@endforeach
					</div>
				</section>
				
				<section class="Atividade_tab profile_tab_body volunteer-current-activities " style="display: none;">
					<div class="volunteer-current-activities-header">
						<span class="dark-info">Atividades a decorrer</span>
					</div>
					@foreach ($actividades[0] as $actividade)
					<div class="volunteer-activity">
						<div class="volunteer-activity-header">
							<span>{{ $actividade->name }}</span>
						</div>
						<div class="progress-bar">
							<div style="height: 100%; float: left; background: #f4bc1c; width: {{ $actividade->completedPercentage }}%"> </div> <!-- Delete id="bar1" when loading data from database is done. This is supposed to controlled via PhP and CSS, defining the width ('percentage') of background which will be colored. -->
						</div>
						<div class="percentage">
							<span>{{ $actividade->completedPercentage }}%</span>
						</div>
					</div>
					@endforeach
				</section>
				
				<section class="Atividade_tab profile_tab_body volunteer-activities-history " style="display: none;">
					<div class="volunteer-activities-history-header">
						<span class="dark-info">Histórico</span>
					</div>
					@foreach ($actividades[1] as $actividade)
					<div class="volunteer-done-activity">
						<div class="volunteer-activity-history-header">
							<span class="block strong">{{ $actividade->name}}</span>
							<span class="grey">{{ $actividade->org}} - {{ $actividade->mes }}. {{ $actividade->ano }}</span>
						</div>
					</div>
					@endforeach
				</section>
				
			</section>
	</div>
	
	
	
	
	<section class="container mobile-container visible-xs" >
	
		<!-- Left Sidebar -->
		<section class="sidebar-left sidebar-left-xs" style="display:none;">
			
			<!-- Search -->
			<section> 
				<span class="sidebar-title">pesquisar</span>
				<input class="search-bar-input" type="text" name="activities" placeholder="Pesquisar Pessoa" />
			</section>
			
			<!-- Options -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Opções</span>
				<ul>
					<li><a>Ver lista voluntários</a></li>
					<li><a>Atribuir crachás</a></li>					
					<li><a>Ver horário</a></li>
                    <li><a>Reconhecimentos</a></li>
                    <li><a>Pedir certificados</a></li>
                    <li><a>Requerimentos</a></li>
				</ul>
			</section>
			
            <!-- My Organizations -->
			<section class="sidebar-listing">
				<span class="sidebar-title">As Minhas Organizações</span>
				<ul>
					<li><a>G.A.S. Porto</a></li>
					<li><a>Banco Alimentar</a></li>					
					<li><a>VO.U. Associação de Voluntariado Universitário</a></li>
                    <li><a>Free Hugs</a></li>
				</ul>
                <br>
                <ul>
                    <li>
                        <i class="glyphicon glyphicon-plus"></i>
                        <a>Criar organização</a>
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-paperclip"></i>
                        <a>Aderir a organização</a>
                    </li>
                </ul>
			</section>
            
			<!-- Events -->
			<section class="sidebar-listing">
				<span class="sidebar-title">Eventos</span>
				<ul>
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Angariação de fundos</a>
					</li>
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Recolha de alimentos</a>
					</li>					
					<li>
						<i class="glyphicon glyphicon-calendar"></i>
						<a>Recolha do lixo da praia</a>
					</li>
				</ul>
			</section>
			
			@include('partials/auth') 
			
		</section>
		<!-- Left Sidebar Over -->
	
		<section class="container">
			
			<section class="title-section">
				<h4><a href="/">U.Porto Voluntariado</a></h4>
				<span>/</span>
				<h4><a>Conta</a></h4>
				<span>/</span>
				<h4><a class="active">Voluntário</a></h4>
			</section>
			
			<section class="main-section">
				<h3>{{ $profile->name }}</h3>
			</section>
			
			<section class="main-section volunteer-basic-info">
				<div class="row volunteer-row-xs">
					<div class="col-xs-6 col-md-3">
						<img class="img img-responsive" src="/src/imgs/volunteers/stevejobs.jpg">
					</div>
					
					<div class="col-md-8">
						
						<div class="volunteer-info">
							<span>Email:</span> 
							<a class="red-link">{{ $profile->email }}</a>
						</div>
						
						<div class="volunteer-info">
							<span>Estatuto:</span> 
							<span>Docente</span>
						</div>
						
						<div class="volunteer-info">
							<span>Localidade:</span> 
							<span>{{ $profile->localidade }}, {{ $profile->country }}</span>
						</div>
					</div>
				</div>
			</section>
			<section>
				<section class="small-info">
					<span class="dark-info">Nível:</span>
					<span class="light-red-info">{{ $profile->current_points }}</span>
				</section>
				
				<section class="small-info">
					<span class="dark-info">Pontos:</span>
					<span class="light-red-info">{{ $profile->current_points }}</span>
					<span class="dark-info">/</span>
					<span class="dark-red-info">{{ $profile->next_lower_limit }}</span>
				</section>
				
				<section class="medium-info">
						<span class="medium-dark-info">Disponibilidade</span>
						<div class="round-rectangle">
							@if ($profile->available == true)
							<span class="green-circle"></span>
							@else
							<span class="red-circle"></span>
							@endif
						</div>
				</section>
				
				<section class="volunteer-menu">
					<div class="row volunteer-menu-row">
						<div class="Orga profile_tab_header col-xs-6 col-md-3 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Orga', 'Orga_tab');">Organizações</a></span>
						</div>
						<div class="Atividade profile_tab_header col-xs-6 col-md-3 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Atividade', 'Atividade_tab');">Atividades</a></span>
						</div>
						<div class="Cracha profile_tab_header col-xs-6 col-md-3 volunteer-menu-col">
							<span class="dark-info"><a onclick="openProfileTab('Cracha', 'Cracha_tab');">Crachás</a></span>
						</div>
						<div class="Trofeu profile_tab_header col-xs-6 col-md-3 volunteer-menu-col active">
							<span class="dark-info"><a onclick="openProfileTab('Trofeu', 'Trofeu_tab');">Troféus</a></span>
						</div>
					</div>
				</section>
				
				<section class="Trofeu_tab profile_tab_body volunteer-menu-collectibles ">
					<div class="row volunteer-menu-row">
						<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/trophies/dedication.png">
							<div class="trophy">
								<span class="trophies capital strong">5 troféus</span>
								<br>
								<span class="trophies short">Dedicação</span>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/trophies/kindness.png">
							<div class="trophy">
								<span class="trophies capital strong">8 troféus</span>
								<br>
								<span class="trophies short">Simpatia</span>
							</div>
						</div>
						<div class="clearfix visible-xs-block org-block"></div>
						<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/trophies/teamwork.png">
							<div class="trophy">
								<span class="trophies capital strong">4 troféus</span>
								<br>
								<span class="trophies short">Espírito de Equipa</span>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/trophies/creativity.png">
							<div class="trophy">
								<span class="trophies capital strong">4 troféus</span>
								<br>
								<span class="trophies short">Originalidade</span>
							</div>
						</div>
					</div>
					
					<div class="row volunteer-menu-row">
						<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/trophies/creativity.png">
							<div class="trophy">
								<span class="trophies capital strong">7 troféus</span>
								<br>
								<span class="trophies short">Competência</span>
							</div>
						</div>
					</div>
				</section>		
				
				<section class="Orga_tab profile_tab_body volunteer-organizations-xs " style="display: none;">
					@foreach ($organizations as $org)
					<article class="volunteer-organization-xs">
						<div class="volunteer-organization-left">
							<img class="img img-responsive volunteer-organization-img" src="{{ $org->image }}">
						</div>
						<div class="volunteer-organization-right-xs">
							<a href="/organizacao/{{$org->name}}" class="red-link block">{{ $org->name }}</a>
							<span class="block">{{ $org->reg_date }} @if ($org->leave_date == null ) - Presente @else - {{ $org->leave_date }} @endif</span>
						</div>
					</article>
					@endforeach
				</section>

				<section class="Cracha_tab profile_tab_body volunteer-menu-collectibles " style="display: none;">
					<div class="row volunteer-menu-row">
						@foreach ($medals as $medal)
						<div class="col-xs-6 col-md-3 volunteer-menu-col-collectibles">
							<img class="img img-responsive img-collectible" src="/src/imgs/trophies/dedication.PNG" alt="{{ $medal->description}}">
							<div class="trophy">
								<span class="trophies capital strong">{{ $medal->medalhas}} crachás</span>
								<br>
								<span class="trophies short">{{ $medal->name}}</span>
							</div>
						</div>
						@endforeach
				</section>
				
				<section class="Atividade_tab profile_tab_body volunteer-current-activities-xs " style="display: none;">
					<div class="volunteer-current-activities-header">
						<span class="dark-info">Atividades a decorrer</span>
					</div>
					@foreach ($actividades[0] as $actividade)
					<div class="volunteer-activity">
						<div class="volunteer-activity-header-xs">
							<span>{{ $actividade->name }}</span>
						</div>
						<div class="progress-bar-xs">
							<div style="height: 100%; float: left; background: #f4bc1c; width: {{ $actividade->completedPercentage }}%"> > </div> <!-- Delete id="bar1" when loading data from database is done. This is supposed to controlled via PhP and CSS, defining the width ('percentage') of background which will be colored. -->
						</div>
						<div class="percentage">
							<span>{{ $actividade->completedPercentage }}%</span>
						</div>
					</div>
					@endforeach
				</section>
				
				<section class="Atividade_tab profile_tab_body volunteer-activities-history" style="display: none;">
					<div class="volunteer-activities-history-header">
						<span class="dark-info">Histórico</span>
					</div>
					@foreach ($actividades[1] as $actividade)
					<div class="volunteer-done-activity">
						<div class="volunteer-activity-history-header">
							<span class="block strong">{{ $actividade->name}}</span>
							<span class="grey">{{ $actividade->org}} - {{ $actividade->mes }}. {{ $actividade->ano }}</span>
						</div>
					</div>
					@endforeach
				</section>
				
			</section>
		</section>
	</section>
	
	<?php
		echo
		"<script>
		function openProfileTab(header, body) {
			var x, y, z, zz;
			x = document.getElementsByClassName(\"profile_tab_body\");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = \"none\";
			}
			x = document.getElementsByClassName(\"profile_tab_body_sm\");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = \"none\";
				x[i].className = x[i].className.replace(\"visible-sm\",\"\");
			}
			x = document.getElementsByClassName(\"profile_tab_body_md_lg\");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = \"none\";
				x[i].className = x[i].className.replace(\"visible-md visible-lg\",\"\");
			}
			y = document.getElementsByClassName(\"profile_tab_header\");
			for (i = 0; i < y.length; i++) {
				y[i].className = y[i].className.replace(\" active\", \"\");
			}
			z = document.getElementsByClassName(header);
			for (i = 0; i < z.length; i++) {
				z[i].className += \" active\";
			}
			z = document.getElementsByClassName(body)
			for (i = 0; i < z.length; i++) {
				z[i].style.display = \"block\";
				zz = z[i].className;
				if(zz.includes(\"profile_tab_body_sm\")) z[i].className += \"visible-sm\";
				else if(zz.includes(\"profile_tab_body_md_lg\")) z[i].className += \"visible-md visible-lg\";
			}
		}
		</script>";
	?>

@stop
	
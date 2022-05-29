<header id="main-header">
		<a id="logo-header" href="#">
            <span  class="site-name" >Salon de Eventos</span>
			<span class="site-desc">Reserva con nosotros.</span>
		</a>
		<nav>
			<ul>  
				@if(Auth::check())
               		 <a  href="{{ url('/logout') }}">Cerrar Sesión</a>
						<li><a href="/dashboard">Inicio</a></li>
						<li><a href="/packages">Paquetes</a></li>
						<li><a href="/mybookings">Mis Eventos</a></li>
				@else
					<li><a href="/register">Registrarse</a></li>
					<li><a href="/login">Iniciar Sesión</a></li>
					<li><a href="/packages">Paquetes</a></li>
				@endif
			</ul>
		</nav>
	</header>

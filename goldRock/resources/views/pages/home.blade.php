@extends('layouts.master')

@section('content')


<section id="main_wrapper">
    
    <section id="inner_nav">
        <nav>
            <div id="logo">
                <i class="fa fa-rocket"></i>
                <div class="title">INNOV</div>
			</div>
            <div id="profile">
				<figure>
					<img src="http://www.realtimearts.net/data/images/art/46/4640_profile_nilssonpolias.jpg" alt="">
                    <figcaption>
                        <a href="#">Andrés Cabrera</a>
                        <div class="logout">Cerrar Sesión</div>
                    </figcaption>
				</figure>
			</div>
            <ul>
                <li class="active"><a href="#"><span></span> Panel de Control</a></li>
                <li><a href="#"><span></span> Viabilidad</a>
                    <ul>
                        <li><a href="#"><span></span> LLuvia de Ideas</a></li>
                        <li><a href="#"><span></span> Experimentos</a></li>
                    </ul>
                </li>
                <li><a href="#">Plan de Negocio</a>
                    <ul>
                        <li><a href="#"><span></span> Segmento de mercado</a></li>
                        <li><a href="#"><span></span> Propuesta de valor</a></li>
                        <li><a href="#"><span></span> Canales</a></li>
                        <li><a href="#"><span></span> Relaciones</a></li>
                        <li><a href="#"><span></span> Fuentes de Ingreso</a></li>
                        <li><a href="#"><span></span> Recursos Clave</a></li>
                        <li><a href="#"><span></span> Actividades Clave</a></li>
                        <li><a href="#"><span></span> Socios Clave</a></li>
                        <li><a href="#"><span></span> Estructura de Costes</a></li>
                    </ul>
                </li>
                <li><a href="#"><span></span> Plan de Marketing</a></li>
                <li><a href="#"><span></span> Configuración</a></li>
                <li><a href="#"><span></span> Mi Cuenta</a></li>
            </ul>
        </nav>	
    </section>
</section>

@stop

@section('footer')

@stop
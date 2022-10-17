@extends('plantilla')
@section('contenidoquecambia')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="{{ asset('imaganes/aventura.png') }}">                       Aventura y naturaleza</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="{{asset('imaganes/cuidades.png')}}" >                Cuidades patrinomiales</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{asset('imaganes/cultura.png')}}" >       Cultura
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Arqueologia</a></li>
              <li><a class="dropdown-item" href="#">Arquitectura</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <img src="{{asset('imaganes/entretenimiento.png')}}" >     Entretenimiento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="{{asset('imaganes/lujo.png')}}" >      Lujo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="{{asset('imaganes/logo.png')}}" >     Pueblos magicos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="{{asset('imaganes/salud.png')}}" >    Salud</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="{{asset('imaganes/playa.png')}}" >       Sol y playa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="{{asset('imaganes/tesoros.png')}}" >     Tesoros coloniales</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="tarjetascon">
    <div class="container-card">
        <div class="card">
            <figure>
                <img src="https://img.visitmexico.com/estados/quintana-roo/playa-del-carmen/Destino_playa-del-carmen_Box.jpg">
            </figure>
                <div class="contenido-card">
                <h3>La Quinta Avenida</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere repellat ratione doloribus eum est deserunt vitae ullam magnam, ipsam blanditiis iste nihil, nemo officia dolores. Fugit porro doloremque vel inventore.</p>
                <a href="{{ url('vistalugar') }}">Leer mas</a>
              </div>
        </div>
        <div class="card">
          <figure>
              <img src="https://lonelyplanetes.cdnstatics2.com/sites/default/files/styles/max_650x650/public/imprescindibles_images/mexico_rivieramaya_tulum_shutterstock_778742050_blueorange_studio_shutterstock_0.jpg?itok=Q0Jc2Uz7">
          </figure>
            <div class="contenido-card">
              <h3>Las ruinas de Tulum</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, veniam. Sit sunt animi magni incidunt, porro, quibusdam officia asperiores illum, provident sequi voluptas ad eaque error maiores natus iusto! Dolor!</p>
              <a href="{{ url('vistalugar') }}">Leer mas</a>
            </div>
        </div>
        <div class="card">
          <figure>
              <img src="https://lonelyplanetes.cdnstatics2.com/sites/default/files/styles/max_650x650/public/imprescindibles_images/mexico_rivieramaya_tulum_shutterstock_778742050_blueorange_studio_shutterstock_0.jpg?itok=Q0Jc2Uz7">
          </figure>
            <div class="contenido-card">
              <h3>Las ruinas de Tulum</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, veniam. Sit sunt animi magni incidunt, porro, quibusdam officia asperiores illum, provident sequi voluptas ad eaque error maiores natus iusto! Dolor!</p>
              <a href="{{ url('vistalugar') }}">Leer mas</a>
            </div>
        </div>
        <div class="card">
          <figure>
              <img src="https://lonelyplanetes.cdnstatics2.com/sites/default/files/styles/max_650x650/public/imprescindibles_images/mexico_rivieramaya_tulum_shutterstock_778742050_blueorange_studio_shutterstock_0.jpg?itok=Q0Jc2Uz7">
          </figure>
            <div class="contenido-card">
              <h3>Las ruinas de Tulum</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, veniam. Sit sunt animi magni incidunt, porro, quibusdam officia asperiores illum, provident sequi voluptas ad eaque error maiores natus iusto! Dolor!</p>
              <a href="{{ url('vistalugar') }}">Leer mas</a>
            </div>
        </div>

    </div>
</div>

@endsection
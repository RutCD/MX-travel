@extends('plantilla')
@section('contenidoquecambia')
<div id="mapa">
    <iframe src="https://www.google.com/maps/d/embed?mid=1zgV-DiukMS8ZpvrBa57B6rUtrqmRL-M&ehbc=2E312F" width="100%" height="765"></iframe>
    <div class="divsim">
        <p><b>Simbologia</b></p>
            <div><img src="{{ asset('imaganes/logo.png') }}" alt="">            Pueblos magicos </div>
            <div><img src="{{ asset('imaganes/ruta.png') }}" alt="">           Rutas  </div>
    </div>
    <div class="container-1">
      <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <a href="{{ url('/estado') }}">
    <button type="button" class="btn btn-outline-primary">search</button></a>
</div>
    </div>
</div>


@endsection

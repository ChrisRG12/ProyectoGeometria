@php
   $rol=session()->get('rol');
   if($rol == "administrador"){
        $plantilla="Plantillas.LayoutAdministrador";
   }else{
        $plantilla="Plantillas.LayoutEstudiante";
   }
@endphp
@extends($plantilla)
@section('content')
{{-- 
<div class="container">
  <div class="row">
      <div class="col-4">
          <div class="card">
              <div class="card-header">
                  ANUNCIOS
              </div>
          </div>
      </div>
      @foreach($consulta as $imagen => $slider)
          <div class="col-4">
              <div class="card" style="width: 18rem;">
                  <img src="../../../subido/{{$slider->imagen}}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">{{$slider->titulo}}</h5>
                      <p class="card-text">{{$slider->descripcion}}</p>
                      <a href="#" class="btn btn-primary">Mas informacion</a>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div> --}}

<div class="grid-container">

  <!-- Iteración sobre la variable $consulta -->
  @foreach($consulta->reverse() as $imagen => $slider)
  <div class="tarjeta">
      <img src="../../../subido/{{$slider->imagen}}" class="card-img-top" alt="...">
      <div class="tarjeta-body">
          <h5 class="tarjeta-header">{{$slider->titulo}}</h5>
          <p class="tarjeta-body">{{$slider->descripcion}}</p>
      </div>
      <div class="tarjeta-footer">
          <a href="#" class="btn btn-primary">Más Información</a>
      </div>
  </div>
  @endforeach

</div>

{{--
<div class="contenedorP" style="margin-left: 15%">
	<div id="banner_principal" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
         	@foreach($consulta as $imagen => $slider)
            <div class="carousel-item {{$imagen == 0 ? 'active' : '' }}">
               <img class="d-block w-100" src="../../../subido/{{$slider->imagen}}" alt="First slide" width=700 height=500>
               <div class="carousel-caption">
                  <div class="titulo_banner">{{$slider->titulo}}</div>
                  <p class="descripcion_banner">{{$slider->descripcion}}</p>
               </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#banner_principal" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner_principal" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
        </a>
      </div>
</div> --}}

@endsection

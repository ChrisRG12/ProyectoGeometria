<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sistema Web de Geometría</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('js/Complementos.js') }}"></script> --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Estilos.css') }}">

</head>

<!--imagen de fondo-->
<body id="vistausuario" >
<div class='transparente'>
    <!--  navbar -->
<div class="contenedormenu" >
    
   <div class="barra" id="barra">
     <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{{route('vistaUsuario')}}" data-toggle="tooltip" data-placement="right" title="Página principal">
    <img src="\img\logo.png" width="60" height="60" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarSupportedContent">
    <ul class="navbar-nav">
       <!--Cálculo-->
       <li class="nav-item dropdown" style="margin-left: 10%">
          <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" style="color:azure">Primer Ciclo</a>
             <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:void(0)" > Matemáticas Basicas<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                   <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0)">Algebra Lineal </a></li>
                      <li><a class="dropdown-item" href="{{route('JuegosDiferencial')}}">Funciones Matemáticas</a></li>
                      <li><a class="dropdown-item" href="{{route('JuegosDiferencial')}}">Matematicas Basicas para computacion</a></li>
                      <li><a class="dropdown-item" href="{{route('JuegosDiferencial')}}">Calculo Diferencial</a></li>
                      <li><a class="dropdown-item" href="{{route('JuegosDiferencial')}}">Probabilidad y Estadisticas</a></li>
                   </ul>
                </li>
                {{-- <li><a class="dropdown-item" href="javascript:void(0)">Cálculo Integral <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                   <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('JuegosIntegrales')}}">Juegos</a></li>
                   </ul>
                </li>
                <li><a class="dropdown-item" href="javascript:void(0)">Cálculo Multivariable</a></li> --}}
              </ul>
        </li>
               <!--Cálculo-->
       <li class="nav-item dropdown" style="margin-left: 15%">
         <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" style="color:azure">Segundo Ciclo</a>
            <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="javascript:void(0)" > Matemáticas Basicas<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  <ul class="submenu dropdown-menu">
                     <li><a class="dropdown-item" href="javascript:void(0)">Calculo Integral </a></li>
                     <li><a class="dropdown-item" href="{{route('JuegosDiferencial')}}">Matematicas para ingenieria 1</a></li>
                     <li><a class="dropdown-item" href="{{route('JuegosDiferencial')}}">Fisica para ingenieria</a></li>
                     <li><a class="dropdown-item" href="{{route('JuegosDiferencial')}}">Matematicas para ingenieria 2</a></li>
                  </ul>
               </li>
               {{-- <li><a class="dropdown-item" href="javascript:void(0)">Cálculo Integral <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  <ul class="submenu dropdown-menu">
                     <li><a class="dropdown-item" href="{{route('JuegosIntegrales')}}">Juegos</a></li>
                  </ul>
               </li>
               <li><a class="dropdown-item" href="javascript:void(0)">Cálculo Multivariable</a></li> --}}
             </ul>
       </li>

                      <!--Cálculo-->
                      <li class="nav-item dropdown" style="margin-left: 30%">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" style="color:azure">Tercer Ciclo</a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="javascript:void(0)" > Matemáticas Basicas<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                 <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)"> Lenguajes y Automatas </a></li>
                                 </ul>
                              </li>
                              {{-- <li><a class="dropdown-item" href="javascript:void(0)">Cálculo Integral <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                 <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('JuegosIntegrales')}}">Juegos</a></li>
                                 </ul>
                              </li>
                              <li><a class="dropdown-item" href="javascript:void(0)">Cálculo Multivariable</a></li> --}}
                            </ul>
                      </li>
           <!--Administración-->
           <li class="nav-item dropdown" style="margin-left: 80%">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:azure">
              Administración
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{route('comentariosUsuarios')}}">Comentarios</a>
                 <a class="dropdown-item" href="{{route('Estadisticas')}}">Estadísticas</a>
                 <a class="dropdown-item" href="{{route('CargaAviso')}}">Carga de avisos</a>
                 <a class="dropdown-item" href="{{route('CargaVideo')}}">Carga de videos</a>
                 <a class="dropdown-item" href="<?php echo route('avisosCargados', session()->get("id")); ?>">Avisos cargados</a>
                 <a class="dropdown-item" href="<?php echo route('videosCargados', session()->get("id")); ?>">Videos cargados</a>
              </div>
           </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle dropleft" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:azure">
               <i class="fa fa-user" aria-hidden="true"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right" id="cerrar" aria-labelledby="navbarDropdown">
                <a class="dropdown-item">Administrador</a>
                  <a class="dropdown-item"><?php
                     $valor_almacenado = session()->get('usuario');
                     echo $valor_almacenado;
                   ?></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('logout')}}">Cerrar Sesión <img src="../../img/cerrar.png" width="20px" height="20px"></a>
               </div>
            </li>
      </ul>
  </div>

</nav>


   </div>
</div>
</div>
<div>
    @yield('content')
</div>


{{-- <div class="falter">
    <section class="buttondark">

        <a href="https://www.facebook.com/UPQoficial/" class="fa-brands fa-facebook"></a>
        <a href="https://www.instagram.com/soyupq/" class="fa-brands fa-instagram-square"></a>
        <a href="#" class="fa-brands fa-twitter-square"></a>
      </section>
</div> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

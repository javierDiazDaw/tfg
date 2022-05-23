<!DOCTYPE html>
<html lang="en">
<head>  
    <script src="https://kit.fontawesome.com/8cd1793adf.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link href= "{{asset('css/style.css') }}" rel= "stylesheet">
</head>
<body>
    <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-light">Menú</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">            
                <a class="nav-link" href="/libros">Lista de Incidencias</a>
            </li>
            @auth
            <li class="nav-item">            
                <a class="nav-link" href="/libros/crear">Crear Incidencia</a>                    
            </li>
            @endauth
            <li class="nav-item active">            
                <a class="nav-link" href="/libros">Perfil</a>
            </li> 

            <li class="nav-item">
                <a class="nav-link" href="/sendEmail">Pedir libro</a>
            </li>

            @auth 
            <li class="nav-item">
                <a class="nav-link" href="/librosPedidos">Libros Pedidos</a>
            </li>
            @endauth
            
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>       
            </ul>
        </div>
    </nav>-->
    <header>
      <div class="d-flex align-items-center p-0">
        <img class="logo2 ms-5 mt-3 mb-3"
        src="https://codeweek-s3.s3.amazonaws.com/event_picture/logo_iespoligonosur_aggnet_24ae5691-fd1d-439f-a6cf-38ba50a9f960.png" alt="">
        
        <!--Menu usuario-->
        <!--Ayuda-->
        <div class="ms-auto ms-5 izq2">
          <a href="#" class="link-dark text-decoration-none text-light me-3 letraPequeña me-md-5">
          <i class="fa-solid fa-circle-question"></i>
            Ayuda
          </a>
        </div>
        <!--Nombre usuario-->
        <?php
            //echo(session()->get('usuario')->nombre);
            ?>
           
        <div class="dropdown me-md-5 izq">
          <a href="#" class="d-block link-dark text-decoration-none text-light letraPequeña" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="https://cdn.icon-icons.com/icons2/1508/PNG/512/systemusers_104569.png" alt="mdo" width="32"
              height="32" class="rounded-circle me-1">
              {{session()->get('usuario')->nombre}}
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="/">Cerrar sesión</a></li>
          </ul>
        </div>
      </div>
    </header>
    <div class="container-fluid">
    <div class="row p-0">
      <div class="col-md-2 p-0 ">
        <nav class="navbar navbar-expand-lg navbar-light p-md-0">
          <div class="container-fluid p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav w-100 flex-column">
              <li class="nav-item border-top">
                  <a class="nav-link colorIcono gris activo2" href="/incidencias">
                    <i class="fa-solid circulo fa-table-list ms-2 me-2 rounded-circle "></i><span class="fw-bold">Lista de incidencias</span></a>
                </li>
                @auth
                <li class="nav-item border-top">               
                  <a class="nav-link colorIcono gris activo2" href="/incidencias/crear">
                    <i class="fa-solid fa-square-plus circulo3 ms-2 me-2 rounded-circle"></i><span class="fw-bold">Crear incidencia</span></a>
                </li>
                @endauth
                @auth
                <li class="nav-item border-top">
                  <a class="nav-link colorIcono gris activo2" href="/perfil/editar/{{session()->get('usuario')->idUsuario}}">
                    <i class="fa-solid fa-user circulo3 ms-2 me-2 rounded-circle"></i><span class="fw-bold">Perfil</span></a>
                </li>
                @endauth
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!--Titulo Lista de Incidencias-->
      <div class="col-12 col-md-9 fondoBlanco">
        @yield('content') 
        <div class="row fondoBlanco">        
          
          <!--Paginacion-->
          <div class="row justify-content-between mt-4 verde pe-5">
            <div class="col-12 col-sm-6  ps-sm-5 md-text-center col-lg-auto letraPequeña ms-3">
              Mostrando 1 de 3 total de resultado 35  
            </div>
            <div class="col-12 col-sm-6 col-md-6 ms-md-5 col-lg-auto letraPequeña ms-3">
              <nav aria-label="Page navigation" class="paginacion">
                <ul class="pagination paginacion">
                  <li class="page-item">
                    <a class="page-link border-0 backstyle" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link border-0 backstyle" href="#">Atrás</a></li>
                  <li class="page-item"><a class="page-link border-0 backstyle selected" href="#">1</a></li>
                  <li class="page-item"><a class="page-link border-0 backstyle" href="#">2</a></li>
                  <li class="page-item"><a class="page-link border-0 backstyle" href="#">3</a></li>
                  <li class="page-item"><a class="page-link border-0 backstyle" href="#">Siguiente</a></li>
                  <li class="page-item">
                    <a class="page-link border-0 backstyle" href="#" aria-label="Next border-0 backstyle">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Footer-->   
  <footer class="py-3  bg-dark">
        <p class="text-center text-muted">© I.E.S. Polígono Sur, 2022</p>
      </footer>

</body>
</html>
@extends('layouts.master')
@section('title', 'Crear incidencia')
@section('content')
    <div class="row fondoBusqueda">
        <div class="col-12 p-3 ps-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="textDecoration letraPequeña" href="#">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Crear incidencia</span></li>
            </ol>
        </nav>
        <div>
            <h1 class="h2 letra2">Crear incidencia</h1>
        </div>
        <nav style="--bs-breadcrumb-divider: '<';" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="textDecoration fw-bold letraPequeña" href="#"><span
                    class="fw-bold">< Volver</span></a></li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="col-12 table-responsive fondoBlanco letraPequeña ps-5 pe-5 ms-1 mt-5">
        <form class="form-register" action="/incidencias/crear" method="post" enctype="multipart/form-data">
            <div class="row mb-5">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label fw-bold ">Título</label>
                    <input type="text" class="form-control" aria-label="titulo">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput2" class="form-label fw-bold ">Aula</label>
                    <input type="number" class="form-control" aria-label="aula">
                </div>
                <div class="col">
                    <label for="cbEntidad" class="form-label fw-bold">Estado</label>
                    <select class="form-select bordeCuadrado form-select-sm" aria-label="estado">
                        <option selected>nuevo</option>
                        <option value="1">procesado</option>
                        <option value="2">resuelto</option>
                        <option value="3">nuevaIncidencia</option>
                    </select>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col">
                    <label for="exampleFormControlInput4" class="form-label fw-bold ">Descripción</label>
                    <input type="text" class="form-control" aria-label="descripcion">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <label for="exampleFormControlInput5" class="form-label fw-bold ">Fecha de creación</label>
                    <input type="date" class="form-control" aria-label="fechaCreacion">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput6" class="form-label fw-bold ">Fecha de modificación</label>
                    <input type="date" class="form-control" aria-label="fechaModificacion">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput7" class="form-label fw-bold ">Fecha de cierre</label>
                    <input type="date" class="form-control" aria-label="fechaCierre">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-6 col-md-1">
                    <input type="submit" name="submit" value="Registrar" class="btn-enviar">  
                </div>
                <div class="col-6 col-md-1 ms-4">
                    <input type="reset" name="reset" value="Resetear" class="btn-resetear">  
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
            </div>                    
                   
        </form>
    </div>
@endsection

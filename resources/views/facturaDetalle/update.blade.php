

{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'pedidos')

{{--DEfinimos el contenido--}}
@section('content')
<h1>Modificar</h1>

<h5>Formulario para Actualizar menu</h5>
<hr>
<button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Editar</button>

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                        <h5 class="modal-title" id="crearMenuModalLabel">Añadir Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formCrearPlatillo">
                            <div class="form-group">
                                <label for="nombre">nombre</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="precio">contraseña</label>
                                <input type="password" class="form-control" id="contraseña" placeholder="***">
                            </div>
                           
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="guardarPlatillo">Guardar</button>
                    </div>
                </form>
            </div>

@endsection


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
   <!-- Botón para abrir el modal directamente -->
   <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearMenuModal">Abrir Modal</button>

<!-- Modal -->
<div class="modal fade" id="crearMenuModal" tabindex="-1" aria-labelledby="crearMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearMenuModalLabel">Actualizar Reporte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formCrearPlatillo">
                    <div class="form-group">
                        <label for="nombre">Actualizar fecha </label>
                        <input type="date" class="form-control" id="fecha">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Actualizar usuario</label>
                        <textarea class="form-control" id="id_usuario" rows="3" placeholder="escriba el usuario"></textarea>
                    </div>
                
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="guardarPlatillo">Guardar</button>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
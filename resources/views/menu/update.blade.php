

{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Marca')

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
                    <h5 class="modal-title" id="editModalLabel">Editar Platillo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit-nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="edit-nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="edit-descripcion" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit-precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="edit-precio" step="0.01" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>

@endsection
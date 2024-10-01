@extends('layout.app')

@section('title', 'platos')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4"></h2>

        <!-- Botón para abrir el modal directamente -->
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearMenuModal">Abrir Modal</button>

        <!-- Modal -->
        <div class="modal fade" id="crearMenuModal" tabindex="-1" aria-labelledby="crearMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="crearMenuModalLabel">Añadir plato</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formCrearPlatillo">
                            <div class="form-group">
                                <label for="nombre">cantidad</label>
                                <input type="text" class="form-control" id="cantidad">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">total</label>
                                <input type="email" class="form-control" id="total">
                            </div>
                            <div class="form-group">
                                <label for="precio">precio</label>
                                <input type="number" class="form-control" id="precio" placeholder="***">
                            </div>
                           
                            <div class="form-group">
                                <label for="precio">id factura</label>
                                <input type="number" class="form-control" id="id_factura" placeholder="***">
                            </div>
                            <div class="form-group">
                                <label for="precio">id plado</label>
                                <input type="number" class="form-control" id="id_plato" placeholder="***">
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

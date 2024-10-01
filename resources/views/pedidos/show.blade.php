{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'pedidos')

{{--DEfinimos el contenido--}}
@section('content')


<!-- Imprimimos el nombre del producto -->
<div class="container mt-5">


<h3>Listado de ingredientes</h3>
<hr>
        <h2 class="text-center mb-4">ingredientes</h2>

        <!-- Botón para abrir el modal de Crear -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Añadir Platillo</button>

        <!-- Tabla de Menú -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">fecha_pedido</th>
                    <th scope="col">estado</th>
                    <th scope="col">id_usuario</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Filas de ejemplo; estos datos deberían ser generados dinámicamente desde la base de datos -->
                <tr>
                    <td>1</td>
                    <td>Ensalada César</td>
                    <td>Ensalada con lechuga romana, crutones y aderezo César</td>
                    <td>$8.99</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Editar</button>
                        <button class="btn btn-danger btn-sm" onclick="confirm('¿Estás seguro de que deseas eliminar este platillo?')">Eliminar</button>
                    </td>
                </tr>
                <!-- Agrega más filas según tus datos -->
            </tbody>
        </table>
    </div>

    <!-- Modal para Crear -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Añadir Platillo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                <div class="modal-body">
                        <form id="formCrearPlatillo">
                            <div class="form-group">
                                <label for="nombre">fecha_pedido</label>
                                <input type="date" class="form-control" id="fecha">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">estado</label>
                                <textarea class="form-control" id="estado" rows="3" placeholder="estado"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="precio">id_usuario relacion</label>
                                <input type="number" class="form-control" id="id_usuario" placeholder="Precio del platillo">
                            </div>
                           
                        </form>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para Editar -->

    <!-- Modal para Crear -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Añadir Platillo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                <div class="modal-body">
                        <form id="formCrearPlatillo">
                            <div class="form-group">
                                <label for="nombre">fecha_pedido</label>
                                <input type="date" class="form-control" id="fecha">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">estado</label>
                                <textarea class="form-control" id="estado" rows="3" placeholder="estado"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="precio">id_usuario relacion</label>
                                <input type="number" class="form-control" id="id_usuario" placeholder="Precio del platillo">
                            </div>
                           
                        </form>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
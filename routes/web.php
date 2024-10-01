<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/menu/show', function () {
    return view('menu/show');
});

Route::get('/menu/create', function () {
    return view('menu.create');
});

Route::get('/menu/update', function () {
    return view('menu/update');
});


Route::get('/ingredientes/show', function () {
    return view('ingredientes/show');
});

Route::get('/ingredientes/create', function () {
    return view('ingredientes/create');
});

Route::get('/ingredientes/update', function () {
    return view('ingredientes/update');
});

//pedidos
Route::get('/pedidos/show', function () {
    return view('pedidos/show');
});

Route::get('/pedidos/create', function () {
    return view('pedidos/create');
});

Route::get('/pedidos/update', function () {
    return view('pedidos/update');
});

//usuarios

Route::get('/usuario/show', function () {
    return view('usuario/show');
});

Route::get('/usuario/create', function () {
    return view('usuario/create');
});

Route::get('/usuario/update', function () {
    return view('usuario/update');
});

//platos

Route::get('/platos/show', function () {
    return view('platos/show');
});

Route::get('/platos/create', function () {
    return view('platos/create');
});

Route::get('/platos/update', function () {
    return view('platos/update');
});

//Factura detalle
Route::get('/facturaDetalle/show', function () {
    return view('facturaDetalle/show');
});

Route::get('/facturaDetalle/create', function () {
    return view('facturaDetalle/create');
});

Route::get('/facturaDetalle/update', function () {
return view('facturaDetalle/update');
});

Route::get('/pago/update', function () {
    return view('pago/update');
    });

Route::get('/categoriaingre/update', function () {
    return view('categoriaingre/update');
    });
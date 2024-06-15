<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/muebles',function(){
    return 'Obtener lista de muebles';
});
Route::get('/muebles/{id}',function(){
    return 'Obtener mueble';
});
Route::post('/muebles',function(){
    return 'Crear muebles';
});
Route::put('/muebles/{id}',function(){
    return 'Actualizar mueble';
});
Route::delete('/muebles',function(){
    return 'Eliminar mueble';
});

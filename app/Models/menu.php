<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table  = 'menus'; //nombre de la tabla
    protected $primaryKey = 'id_menus'; //llave primaria de la tabla
    protected $fillable = ['nombre menu','descripcion','precio']; //campos para asignacion masiva
}

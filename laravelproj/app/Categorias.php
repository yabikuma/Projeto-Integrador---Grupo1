<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table='categorias';
    protected $primaryKey = 'idCategoaria';
    protected $fillable = ['descricaoCategoria'];
}

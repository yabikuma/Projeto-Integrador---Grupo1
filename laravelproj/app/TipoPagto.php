<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPagto extends Model
{
    
  protected $table='tipopagto';
  protected $primaryKey = 'idtipopagto';
  protected $fillable = ['descricaotipopagto'];   //somente os campos q podem ser alterados
  //protected $guarded -- para informar campo q não podem ser alterados
  //laravel model para pesquisar mais opções

 
}

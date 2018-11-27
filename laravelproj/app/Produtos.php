<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table='produtos';
    protected $primaryKey = 'idProduto';
    protected $fillable = ['sku', 'nomeProduto','descricaoProduto','unidMedida','img'];
}

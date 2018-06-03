<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    
    protected $fillable = ['id_categoria','descricao'];
    protected $table = 'produtos';
    public $timestamps = false;
    public $primaryKey = 'id_produto';

    public function categorias()
    {
        //return $this->hasMany('App\Categorias','id_categoria','id_categoria');
        return $this->belongsTo('App\Categorias','id_categoria','id_categoria');
    }

}

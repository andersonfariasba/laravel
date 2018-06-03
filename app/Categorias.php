<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    protected $fillable = ['descricao'];
    protected $table = 'categorias';
    public $timestamps = false;
    public $primaryKey = 'id_categoria';


     /*public function produtos(){
       return $this->belongsTo('App\Produtos','id','id');
    }*/
 

}

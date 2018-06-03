<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    //
    protected $fillable = ['titulo','texto'];
    protected $guarded = ['titulo','texto'];
    protected $table = 'crud';
   
    public $timestamps = false;
   

}

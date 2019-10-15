<?php

namespace BUHWAR\Admin;

use Illuminate\Database\Eloquent\Model;
use BUHWAR\Admin\Estado;


class Municipio extends Model
{
    protected $guarded = [];
    public function estado_g()
    {  
        return $this->belongsTo(Estado::class); //pertenece a 
    }
}


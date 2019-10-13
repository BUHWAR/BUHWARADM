<?php

namespace BUHWAR\Admin;

use Illuminate\Database\Eloquent\Model;
use BUHWAR\Admin\Estado;

class Municipio extends Model
{
    public function estado()
    {  //$post-> category->name
        return $this->belongsTo(Estado::class); //pertenece a 
    }
}

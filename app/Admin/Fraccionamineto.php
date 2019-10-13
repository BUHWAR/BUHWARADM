<?php

namespace BUHWAR\Admin;

use Illuminate\Database\Eloquent\Model;
use BUHWAR\Admin\Municipio;

class Fraccionamineto extends Model
{
    public function municipio()
    {  //$post-> category->name
        return $this->belongsTo(Municipio::class); //pertenece a 
    }
}

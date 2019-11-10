<?php

namespace BUHWAR\Admin;

use Illuminate\Database\Eloquent\Model;

class HorarioGuardia extends Model
{
    protected $fillable = ['estado'];
    public function municipio()
    {  //$post-> category->name
        return $this->belongsTo(Municipio::class); //pertenece a 
    }
}

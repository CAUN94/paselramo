<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
     public function Cursos()
    {
    	return $this->belongsTo(Curso::class);
    }
}

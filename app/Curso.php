<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function Uni()
    {
    	return $this->belongsTo(Uni::class);
    }

    public function inscritos()
    {
    	return $this->hasMany(Inscrito::class);
    }
}

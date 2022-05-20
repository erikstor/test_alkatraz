<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{


    protected $table = 'nota';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $attributes = [
        'asignatura_id' => '',
        'calificacion' => '',
        'fecha_examen' => '',
        'convocatoria' => '',
        'alumno_id' => '',
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}

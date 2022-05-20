<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{

    protected $table = 'alumno';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $attributes = [
        'nombre' => '',
        'apellido' => '',
        'apellido2' => '',
        'fecha_nacimiento' => '',
    ];

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }


}

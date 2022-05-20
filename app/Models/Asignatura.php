<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignatura';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $attributes = [
        'id' => '',
        'nombre' => '',
    ];

    public function nota()
    {
        return $this->hasMany(Nota::class);
    }

}

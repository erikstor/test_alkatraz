<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'asignatura' => $this->asignatura,
            'calificacion' => $this->calificacion,
            'fecha_examen' => $this->fecha_examen,
            'convocatoria' => $this->convocatoria,
        ];
    }
}

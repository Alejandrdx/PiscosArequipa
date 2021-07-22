<?php

namespace App\Http\Resources;

use App\Models\Solicitud;
use Illuminate\Http\Resources\Json\JsonResource;

class EstadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Nombre' => $this->Nombre,
            'Descripcion' => $this->Descripcion,
            'Solicitudes' => SolicitudResource::collection(Solicitud::all()->where('Id_Estado', $this->id))
        ];
    }
}

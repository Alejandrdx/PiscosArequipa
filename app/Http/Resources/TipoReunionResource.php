<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TipoReunionResource extends JsonResource
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
            'Notas_Pedido' => $this->notas_pedido,
        ];
    }
}

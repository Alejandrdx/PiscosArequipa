<?php

namespace App\Http\Resources;

use App\Models\Detalle_Inventario;
use Illuminate\Http\Resources\Json\JsonResource;

class PiscoResource extends JsonResource
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
            'Precio' => $this->Precio,
            'Imagen' => $this->Imagen,
            'Detalle_Inventario' => DetalleInventarioResource::collection(Detalle_Inventario::all()->where('Id_Pisco', $this->id))
        ];
    }
}

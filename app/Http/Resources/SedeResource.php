<?php

namespace App\Http\Resources;

use App\Models\Detalle_Inventario;
use Illuminate\Http\Resources\Json\JsonResource;

class SedeResource extends JsonResource
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
            'Direccion' => $this->Direccion,
            'Notas_Pedido' => $this->notas_pedido,
            'Solicitudes' => $this->solicitudes,
            "Detalles_Inventario" => DetalleInventarioResource::collection(Detalle_Inventario::all()->where('Id_Sede', $this->id))
        ];
    }
}

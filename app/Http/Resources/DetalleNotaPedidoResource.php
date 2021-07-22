<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetalleNotaPedidoResource extends JsonResource
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
            'Cantidad' => $this->Cantidad,
            'Nota_Pedido' => $this->nota_pedido,
            'Pisco' => $this->pisco
        ];
    }
}

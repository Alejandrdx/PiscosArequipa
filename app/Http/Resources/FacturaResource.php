<?php

namespace App\Http\Resources;

use App\Models\Detalle_Factura;
use Illuminate\Http\Resources\Json\JsonResource;

class FacturaResource extends JsonResource
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
            'Fecha' => $this->Fecha,
            'Guia_Remision' => $this->N_GuiaRemision,
            'Total' => $this->Total,
            'Cliente' => $this->cliente,
            'Empleado' => $this->empleado,
            'Nota_Pedido' => $this->nota_pedido,
            'Detalles_Factura' => DetalleFacturaResource::collection(Detalle_Factura::all()->where('Id_Factura', $this->id))
        ];
    }
}

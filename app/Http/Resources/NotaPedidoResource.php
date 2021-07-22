<?php

namespace App\Http\Resources;

use App\Models\Detalle_NotaPedido;
use Illuminate\Http\Resources\Json\JsonResource;

class NotaPedidoResource extends JsonResource
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
            'Fecha_Pedido' => $this->Fecha_Pedido,
            'Fecha_Entrega' => $this->Fecha_Entrega,
            'Fecha_Pago' => $this->Fecha_Pago,
            'Descripcion' => $this->Descripcion,
            'Contacto' => $this->contacto,
            'Tipo_Reunion' => $this->tipo_reunion,
            'Sede' => $this->sede,
            'Empleado' => $this->empleado,
            'Facturas' => $this->facturas,
            'Detalles_NotaPedido' => DetalleNotaPedidoResource::collection(Detalle_NotaPedido::all()->where('Id_NotaPedido', $this->id))
        ];
    }
}

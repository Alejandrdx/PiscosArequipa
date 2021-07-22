<?php

namespace App\Http\Resources;

use App\Models\cliente;
use App\Models\Nota_Pedido;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactoResource extends JsonResource
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
            'Nombres' => $this->Nombres,
            'Apellido_Paterno' => $this->Apellido_Paterno,
            'Apellido_Materno' => $this->Apellido_Materno,
            'DNI' => $this->DNI,
            'Telefono' => $this->Telefono,
            'Email' => $this->Email,
            'Cliente' => $this->cliente,
            'Notas_Pedido' => NotaPedidoResource::collection(Nota_Pedido::all()->where('Id_Contacto', $this->id))
        ];
    }
}
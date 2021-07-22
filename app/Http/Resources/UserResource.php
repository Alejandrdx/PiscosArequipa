<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'login' => $this->login,
            'Nombres' => $this->Nombres,
            'Apellido_Paterno' => $this->Apellido_Paterno,
            'Apellido_Materno' => $this->Apellido_Materno,
            'DNI' => $this->DNI,
            'Direccion' => $this->Direccion,
            'Telefono' => $this->Telefono,
            'Email' => $this->Email,
            'Rol' => $this->rol,
            'Facturas' => $this->facturas,
            'Notas_Pedido' => $this->notas_pedido,
            'Solicitudes' => $this->solicitudes,
        ];
    }
}

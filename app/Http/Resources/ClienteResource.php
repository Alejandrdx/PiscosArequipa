<?php

namespace App\Http\Resources;

use App\Models\Contacto;
use App\Models\Factura;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
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
            'Nombre_Comercial' => $this->Nombre_Comercial,
            'Razon_Social' => $this->Razon_Social,
            'Direccion' => $this->Direccion,
            'Telefono' => $this->Telefono,
            'Email' => $this->Email,
            'RUC' => $this->RUC,
            'Contactos' => $this->contactos,
            'Facturas' => $this->facturas
        ];
    }
}

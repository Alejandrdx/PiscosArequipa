<?php

namespace App\Http\Resources;

use App\Models\Detalle_Solicitud;
use Illuminate\Http\Resources\Json\JsonResource;

class SolicitudResource extends JsonResource
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
            'Fecha_Solicitud' => $this->Fecha_Solicitud,
            'Descripcion' => $this->Descripcion,
            'Empleado' => $this->empleado,
            'Sede' => $this->sede,
            'Estado' => $this->estado,
            'Detalles_Solicitud' => DetalleSolicitudResource::collection(Detalle_Solicitud::all()->where('Id_Solicitud', $this->id))
        ];
    }
}

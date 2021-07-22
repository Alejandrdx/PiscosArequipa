<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    protected $table = 'sede';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Direccion',
    ];

    public function notas_pedido()
    {
        return $this->hasMany(Nota_Pedido::class, 'Id_Sede' , 'id');
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'Id_Sede' , 'id');
    }

    public function detalles_inventario()
    {
        return $this->hasMany(Detalle_Inventario::class, 'Id_Sede' , 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pisco extends Model
{
    use HasFactory;

    protected $table = 'pisco';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Precio',
        'Imagen'
    ];

    public function detalles_factura()
    {
        return $this->hasMany(Detalle_Factura::class, 'Id_Pisco' , 'id');
    }

    public function detalles_nota_pedido()
    {
        return $this->hasMany(Detalle_NotaPedido::class, 'Id_Pisco' , 'id');
    }

    public function detalles_solicitud()
    {
        return $this->hasMany(Detalle_Solicitud::class, 'Id_Pisco' , 'id');
    }

    public function detalles_inventario()
    {
        return $this->hasMany(Detalle_Inventario::class, 'Id_Pisco' , 'id');
    }
}

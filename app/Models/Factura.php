<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'factura';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Fecha',
        'N_GuiaRemision',
        'Total',
        'Id_Cliente',
        'Id_Empleado',
        'Id_NotaPedido',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'Id_Cliente', 'id');
    }

    public function empleado()
    {
        return $this->belongsTo(User::class, 'Id_Empleado', 'id');
    }

    public function nota_pedido()
    {
        return $this->belongsTo(Nota_Pedido::class, 'Id_NotaPedido', 'id');
    }

    public function detalles_factura()
    {
        return $this->hasMany(Detalle_Factura::class, 'Id_Factura' , 'id');
    }
}

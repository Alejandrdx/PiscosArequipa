<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota_Pedido extends Model
{
    use HasFactory;

    protected $table = 'nota_pedido';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Fecha_Pedido',
        'Fecha_Entrega',
        'Fecha_Pago',
        'Descripcion',
        'Id_Contacto',
        'Id_TipoReunion',
        'Id_Sede',
        'Id_Empleado',
    ];

    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'Id_Contacto', 'id');
    }

    public function tipo_reunion()
    {
        return $this->belongsTo(Tipo_Reunion::class, 'Id_TipoReunion', 'id');
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'Id_Sede', 'id');
    }

    public function empleado()
    {
        return $this->belongsTo(User::class, 'Id_Empleado', 'id');
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'Id_NotaPedido' , 'id');
    }

    public function detalles_nota_pedido()
    {
        return $this->hasMany(Detalle_NotaPedido::class, 'Id_NotaPedido' , 'id');
    }
}

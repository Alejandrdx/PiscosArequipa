<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_NotaPedido extends Model
{
    use HasFactory;

    protected $table = 'detalle_notapedido';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Cantidad',
        'Id_NotaPedido',
        'Id_Pisco',
    ];

    public function nota_pedido()
    {
        return $this->belongsTo(Nota_Pedido::class, 'Id_NotaPedido', 'id');
    }

    public function pisco()
    {
        return $this->belongsTo(Pisco::class, 'Id_Pisco', 'id');
    }
}

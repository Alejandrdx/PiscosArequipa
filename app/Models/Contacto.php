<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombres',
        'Apellido_Paterno',
        'Apellido_Materno',
        'DNI',
        'Telefono',
        "Email",
        "Id_Cliente"
    ];

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'Id_Cliente', 'id');
    }

    public function notas_pedido()
    {
        return $this->hasMany(Nota_Pedido::class, 'Id_Contacto', 'id');
    }
}

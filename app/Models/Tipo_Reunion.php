<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Reunion extends Model
{
    use HasFactory;

    protected $table = 'tipo_reunion';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre',
        'Descripcion',
    ];

    public function notas_pedido()
    {
        return $this->hasMany(Nota_Pedido::class, 'Id_TipoReunion' , 'id');
    }
}

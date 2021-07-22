<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Inventario extends Model
{
    use HasFactory;

    protected $table = 'detalle_inventario';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Cantidad',
        'Id_Sede',
        'Id_Pisco',
    ];

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'Id_Sede', 'id');
    }

    public function pisco()
    {
        return $this->belongsTo(Pisco::class, 'Id_Pisco', 'id');
    }
}

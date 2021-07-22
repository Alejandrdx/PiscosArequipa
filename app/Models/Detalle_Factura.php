<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Factura extends Model
{
    use HasFactory;

    protected $table = 'detalle_factura';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Cantidad',
        'Id_Factura',
        'Id_Pisco',
    ];

    public function factura()
    {
        return $this->belongsTo(Factura::class, 'Id_Factura', 'id');
    }

    public function pisco()
    {
        return $this->belongsTo(Pisco::class, 'Id_Pisco', 'id');
    }
}

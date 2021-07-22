<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Solicitud extends Model
{
    use HasFactory;

    protected $table = 'detalle_solicitud';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Cantidad',
        'Id_Solicitud',
        'Id_Pisco',
    ];

    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class, 'Id_Solicitud', 'id');
    }

    public function pisco()
    {
        return $this->belongsTo(Pisco::class, 'Id_Pisco', 'id');
    }
}

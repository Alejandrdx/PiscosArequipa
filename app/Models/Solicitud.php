<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitud';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Fecha_Solicitud',
        'Descripcion',
        'Id_Empleado',
        'Id_Sede',
        'Id_Estado',
    ];

    public function empleado()
    {
        return $this->belongsTo(User::class, 'Id_Empleado', 'id');
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'Id_Sede', 'id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'Id_Estado', 'id');
    }

    public function detalles_solicitud()
    {
        return $this->hasMany(Detalle_Solicitud::class, 'Id_Solicitud' , 'id');
    }
}

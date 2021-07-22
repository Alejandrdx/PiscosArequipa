<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estado';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre',
        'Descripcion',
    ];

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'Id_Solicitud' , 'id');
    }
}

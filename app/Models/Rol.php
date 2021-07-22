<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre',
        'Descripcion',
    ];

    public function empleados()
    {
        return $this->hasMany(User::class, 'Id_Rol' , 'id');
    }
}

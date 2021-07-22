<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'login',
        'password',
        'Nombres',
        'Apellido_Paterno',
        'Apellido_Materno',
        'DNI',
        'Direccion',
        'Telefono',
        'Email',
        'Id_Rol',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'Id_Rol', 'id');
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'Id_Empleado' , 'id');
    }

    public function notas_pedido()
    {
        return $this->hasMany(Nota_Pedido::class, 'Id_Empleado' , 'id');
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'Id_Empleado' , 'id');
    }

}

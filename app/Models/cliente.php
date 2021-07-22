<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre_Comercial',
        'Razon_Social',
        'Direccion',
        'Telefono',
        'Email',
        'RUC'
    ];

    public function contactos()
    {
        return $this->hasMany(Contacto::class, 'Id_Cliente' , 'id');
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'Id_Cliente' , 'id');
    }
}

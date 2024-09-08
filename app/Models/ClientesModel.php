<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = [
        'nombre', 
        'apellido', 
        'fecha_nacimiento', 
        'fecha_sucripcion', 
        'correo_electronico', 
        'telefono_movil'
    ];
}

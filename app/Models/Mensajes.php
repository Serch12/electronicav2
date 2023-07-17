<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    use HasFactory;
    protected $table='tbl_mensajes';
    protected $primaryKey = 'id_mensaje';
    protected $fillable= ['nombre', 'correo','numero_telefonico','mensaje'];
}

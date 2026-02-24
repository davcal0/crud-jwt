<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'cod_rol';
    protected $fillable = ['nombre_rol', 'descripcion'];
    
    public function usuarios()
    {
        return $this->hasMany(User::class, 'cod_rol', 'cod_rol');
    }
}

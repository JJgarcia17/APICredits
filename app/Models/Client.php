<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    //asignacion de la tabla al modelo
    protected $table = "clients";
    //declaracion de variable para salvar de manera masiva
    protected $fillable =
    [
        "name"
    ];
    //Relacion de cliente de uno a muchos para crear las datos faker de la table credits
    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}

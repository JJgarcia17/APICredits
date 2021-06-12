<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    //asignacion de la tabla al modelo
    protected $table = "credits";
    //declaracion de variable para salvar de manera masiva
    protected $fillable = 
    [
        'client_id',
        'admin_id',
        'date',
        'description',
        'amount',
        'relid'
    ];
    //Relacion a la inversa de la tabla credits a client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

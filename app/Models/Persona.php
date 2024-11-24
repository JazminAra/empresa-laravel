<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    // Nombre de la tabla
    protected $table = 'personas';

    // Nombre de la clave primaria
    protected $primaryKey = 'nPerCodigo';
    //protected $guarded=[];
    // protected $fillable = ['cPerApellido','cPerNombre','cPerDireccion','dPerFecNac','nPerEdad','nPerSueldo','cPerRnd','nPerEstado','created_at'];
    
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}

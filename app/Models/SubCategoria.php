<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    // relacion uno a muchos 

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }
    // relacion uno a muchos inversa
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','imagen','icono'];
// relacion uno a muchos
    public function subcategoria()
    {
        return $this->hasMany(SubCategoria::class);
    }

    // relacion muchos a muchos
    public function usuariofreelancer()
    {
        return $this->belongsToMany(User::class);
    }

    public function servicios()
    {
        return $this->hasManyThrough(Servicio::class,SubCategoria::class);
    }
}

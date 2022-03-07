<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    const Entregado = 1;
    const Enproceso = 2;

    protected $guarded = ['id','created_at','updated_at'];

    // relacion uno a muchos inversa
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function subcategoria()
    {
        return $this->belongsTo(SubCategoria::class);
    }

   // relacion uno a muchos polimorfica
   public function imagen()
   {
       return $this->morphMany(Imagen::class,'imageable');
   }
   public function comentarios()
   {
       return $this->morphMany(comentario::class,'comentable');
   }

   public function calificaciones()
   {
       return $this->morphMany(calificacion::class,'calificacionable');
   }



 
}

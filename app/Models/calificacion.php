<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    // relacion uno a muchos inversa
    public function calificacionable()
    {
        return $this->morphTo(User::class);
    }

}

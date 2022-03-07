<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    // relacion uno a muchos

    public function usuario()
    {
        return $this->hasMany(User::class);
    }
}

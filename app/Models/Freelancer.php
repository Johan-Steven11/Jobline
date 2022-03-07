<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
    // relacion uno a muchos

    public function certificado()
    {
        return $this->hasMany(Certificado::class);
    }
    // relacion uno a uno

    public function usuario()
{
    return $this->belongsTo(User::class);
}
}

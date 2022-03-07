<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;
    
    protected $guarded = ['id','created_at','updated_at'];

    // relacion uno a muchos inversa

    public function freelancers()
    {
        return $this->belongsTo(Freelancer::class);
    }
}

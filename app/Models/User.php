<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    // relacion uno a muchos inversa

    public function rol()
    {
        return $this->belongsTo(User::class);
    }
// relacion uno a muchos 

public function servicios()
{
    return $this->hasMany(Servicio::class);
}
// relacion uno a uno

public function freelancer()
{
    return $this->hasOne(Freelancer::class);
}

// relacion uno a muchos polimorfica

public function comentarios()
{
    return $this->morphMany(comentario::class,'comentable');
}

public function calificaciones()
{
    return $this->morphMany(calificacion::class,'calificacionable');
}
// relacion mucho a muchos
public function categorias()
{
    return $this->belongsToMany(Categoria::class);
}

}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'rol',
        'id_empresas',
=======
>>>>>>> 8199eceb7daca29dd2dd70977acdbc10ee046734
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_profile_url(){
        return 'home';
    }

<<<<<<< HEAD
    public function empresa(){ //$libro->categoria->nombre
        return $this->belongsTo(Empresas::class); //Pertenece a una categoría.
=======
    public function roles()
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'id_empresa');
>>>>>>> 8199eceb7daca29dd2dd70977acdbc10ee046734
    }
}

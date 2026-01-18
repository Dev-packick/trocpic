<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable=[
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'password',
        // 'image',
        'role',
    ];

    public function trocs(): HasMany{
        return $this->hasMany(Troc::class);
    }


}

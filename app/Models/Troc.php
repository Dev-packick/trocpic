<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Troc extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'adresse',
        'description',
        'typeTroc',
        'image',
        'user_id'
    ];

    
    public function comments(){
        return $this->hasMany(Commentaire::class)->with('user');
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Troc extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'adresse',
        'description',
        'date',
        'typeTroc',
        'image'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Messagerie extends Model
{
    use HasFactory;

    protected $fillable=[
        'message',
        'sender_id',
        'recever_id',
        'troc_id'
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function recever(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recever_id');
    }

    public function troc(): BelongsTo
    {
        return $this->belongsTo(Troc::class);
    }
}

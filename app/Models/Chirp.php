<?php

namespace App\Models;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tonysm\TurboLaravel\Models\Broadcasts;

class Chirp extends Model
{
    use HasFactory, Broadcasts;

    protected $broadcasts = [
        'insertsBy' => 'prepend'
    ];

    protected $fillable = [
        'message'
    ];

    function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    function broadcastsTo()
    {
        return [
            new PrivateChannel('chirps')
        ];
    }
}

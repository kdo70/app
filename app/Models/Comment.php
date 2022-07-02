<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function object(): MorphTo
    {
        return $this->morphTo();
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('d.m.Y в H:i:s');
    }

    public function ratings(): MorphMany
    {
        return $this->morphMany(Rating::class, 'object');
    }

    public function rating()
    {
        return $this->ratings->sum('value');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function username()
    {
        return $this->user->username;
    }
}

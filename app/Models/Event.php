<?php

namespace App\Models;

use App\Casts\SlugCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Date;

/**
 *
 */
class Event extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $casts = [
        'slug' => SlugCast::class,
    ];

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('H:i d.m.Y');
    }
}

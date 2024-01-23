<?php

namespace App\Models;

use App\Casts\PublishedStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alterego extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'type',
        'title',
        'image',
        'description',
        'keywords',
        'content',
        'status',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'immutable_datetime',
        'status' => PublishedStatus::class
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'slug'
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function hasArticles(): bool
    {
        return (bool) $this->articles->count();
    }
}

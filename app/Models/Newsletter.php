<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = ['email', 'confirmed', 'confirmed_at'];

    public function removed(): bool
    {
        return $this->deleted_at !== null;
    }
}

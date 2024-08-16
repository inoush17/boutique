<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpPassword extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
    ];
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class character extends Model
{
    use HasFactory;
    protected $table = 'character';
    protected $fillable = [
        'name',
        'game_id',
        'image',
        'smashed',
        'passed',
        'total',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}

<?php

namespace App\Models;

use App\Traits\Models\HasCreator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    use HasFactory;

    use HasCreator;

    protected $table = 'losts';

    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
    ];
}

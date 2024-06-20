<?php

namespace App\Models;

use App\Traits\Models\HasCreator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Found extends Model
{
    use HasFactory;

    use HasCreator;

    protected $table = 'founds';

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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'links';

    protected $fillable = [
        'link',
        'short_link',
        'customize',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Probable extends Model
{
    use HasFactory;

    protected $fillable = [
        'publish_date', 'karantina', 'discarded'
    ];

    protected $hidden = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recover extends Model
{
    use HasFactory;

    protected $fillable = [
        'publish_date', 'jumlah'
    ];

    protected $hidden = [];
}

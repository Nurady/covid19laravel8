<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    use HasFactory;

    protected $fillable = [
        'publish_date', 'jumlah'
    ];

    protected $hidden = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rest extends Model
{
    use HasFactory;
    protected $fillable = [
        'time-id', 'rest-start', 'rest-stop'
    ];
}

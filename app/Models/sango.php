<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sango extends Model
{
    use HasFactory;
    public $fillable = [
        'ip',
        'url',
        'sanID',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = 'event';

    protected $fillable = [
        'event',
        'nim',
        'nama',
        'email',
        'no_telp',
        'fakultas'
    ];
}
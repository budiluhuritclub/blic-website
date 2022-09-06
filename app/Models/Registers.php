<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
    use HasFactory;

    protected $table = 'registration_members';

    protected $fillable = [
        'name',
        'email',
        'nim',
        'phone_number',
        'faculty',
        'major',
        'interest',
        'field_interest',
        'reason'
    ];
}
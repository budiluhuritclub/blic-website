<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivMember extends Model
{
    use HasFactory;

    protected $table = 'member_division';

    protected $fillable = [
        'nim',
        'kode_divisi'
    ];

    public function divisions()
    {
        return $this->belongsTo(Division::class, 'kode_divisi', 'kode');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'nim', 'nim');
    }
}
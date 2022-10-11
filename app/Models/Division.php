<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = 'division';

    protected $fillable = [
        'kode',
        'nama_division',
        'deskripsi'
    ];

    public function divmember()
    {
        return $this->hasOne(DivMember::class, 'kode', 'kode_divisi');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devcamp extends Model
{
    use HasFactory;

    protected $table = 'devcamp';

    protected $fillable = [
        'no_batch',
        'nim',
        'nama',
        'email',
        'no_telp',
        'fakultas'
    ];

    public function batches()
    {
        return $this->hasOne(DevcampBatch::class, 'batch', 'no_batch');
    }
}
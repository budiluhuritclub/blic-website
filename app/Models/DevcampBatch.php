<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevcampBatch extends Model
{
    use HasFactory;

    protected $table = 'devcamp_batch';

    protected $fillable = [
        'batch', 'title'
    ];

    public function devcamp()
    {
        return $this->belongsTo(DevcampBatch::class, 'no_batch', 'batch');
    }
}
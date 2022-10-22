<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // use HasFactory;
    protected $table = 'projects';

    protected $fillable = [
        'category_project_id',
        'name',
        'slug',
        'description',
        'photo',
        'url_project',
        'is_visible',
    ];

    public function category_project()
    {
        return $this->belongsTo('App\Models\DataCenter\CategoryProject', 'category_project_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}

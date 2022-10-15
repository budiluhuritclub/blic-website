<?php

namespace App\Models\DataCenter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProject extends Model
{
    // use HasFactory;

    protected $table = 'category_projects';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function projects()
    {
        return $this->hasMany('App\Models\Project', 'category_project_id', 'id');
    }
}

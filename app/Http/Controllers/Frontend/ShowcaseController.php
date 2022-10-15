<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\DataCenter\CategoryProject;
use App\Models\Project;
use App\Models\User;

use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function index()
    {
        $projects = Project::query();

        $projects->when(request('category'), function ($query) {
            $query->whereHas('category_project', function ($query) {
                $query->where('slug', request('category'));
            });
        });

        $projects = $projects->whereIsVisible(true)->latest()->paginate(12);

        $category_projects = CategoryProject::latest()->get()->pluck('name', 'slug');

        return view('pages.frontend.showcase.index', compact('projects', 'category_projects'));
    }

    public function show(User $user, Project $project)
    {
        $project->load('category_project', 'user');

        return view('pages.frontend.showcase.show', compact('project'));
    }
}

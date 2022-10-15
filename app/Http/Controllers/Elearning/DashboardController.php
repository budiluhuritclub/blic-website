<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $my_projects = auth()->user()->projects();

        $project_visible_count = $my_projects->clone()->whereIsVisible(true)->count();
        $project_hidden_count = $my_projects->clone()->whereIsVisible(false)->count();

        return view('pages.frontend.elearning.dashboard', compact('project_visible_count', 'project_hidden_count'));
    }
}

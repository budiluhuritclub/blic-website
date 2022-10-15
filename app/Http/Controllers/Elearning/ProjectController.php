<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;

use App\Http\Requests\Elearning\Project\StoreProjectRequest;
use App\Http\Requests\Elearning\Project\UpdateProjectRequest;

use App\Models\DataCenter\CategoryProject;
use App\Models\Project;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_projects = auth()->user()->projects()->with('category_project')->latest()->paginate(9);

        return view('pages.frontend.elearning.project.index', compact('my_projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_projects = CategoryProject::latest()->get()->pluck('name', 'id');

        return view('pages.frontend.elearning.project.create', compact('category_projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = str()->slug($data['name']);
        $data['photo'] = $request->file('photo')->store('assets/elearning/project', 'public');

        auth()->user()->projects()->create($data);

        session()->flash('success', 'Project created successfully.');
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $this->authorize('update', $project);

        $project->load('category_project');

        $category_projects = CategoryProject::latest()->get()->pluck('name', 'id');

        return view('pages.frontend.elearning.project.edit', compact('project', 'category_projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $this->authorize('update', $project);

        $data = $request->validated();

        $data['slug'] = str()->slug($data['name']);

        if ($request->hasFile('photo')) {

            // delete old photo
            if (File::exists(storage_path('app/public/' . $project->photo))) {
                File::delete(storage_path('app/public/' . $project->photo));
            }

            $data['photo'] = $request->file('photo')->store('assets/elearning/project', 'public');
        }

        $project->update($data);

        session()->flash('success', 'Project updated successfully.');
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);

        // delete old photo
        if (File::exists(storage_path('app/public/' . $project->photo))) {
            File::delete(storage_path('app/public/' . $project->photo));
        }

        $project->delete();

        session()->flash('success', 'Project deleted successfully.');
        return redirect()->route('project.index');
    }
}

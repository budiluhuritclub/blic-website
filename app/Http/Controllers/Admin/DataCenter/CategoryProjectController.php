<?php

namespace App\Http\Controllers\Admin\DataCenter;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\DataCenter\CategoryProject\StoreCategoryProjectRequest;
use App\Http\Requests\Admin\DataCenter\CategoryProject\UpdateCategoryProjectRequest;

use App\Models\DataCenter\CategoryProject;

use Illuminate\Http\Request;

class CategoryProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_projects = CategoryProject::latest()->get();

        return view('pages.admin.data-center.category-project.index', compact('category_projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.data-center.category-project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryProjectRequest $request)
    {
        $data = $request->validated();

        // create slug
        $data['slug'] = str()->slug($data['name']);

        CategoryProject::create($data);

        session()->flash('success', 'Category project has been created!');
        return redirect()->route('category_project.index');
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
    public function edit(CategoryProject $category_project)
    {
        return view('pages.admin.data-center.category-project.edit', compact('category_project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryProjectRequest $request, CategoryProject $category_project)
    {
        $data = $request->validated();

        // create slug
        $data['slug'] = str()->slug($data['name']);

        $category_project->update($data);

        session()->flash('success', 'Category project has been updated!');
        return redirect()->route('category_project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProject $category_project)
    {
        $category_project->delete();

        session()->flash('success', 'Category project has been deleted!');
        return redirect()->route('category_project.index');
    }
}

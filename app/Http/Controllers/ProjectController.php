<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('back.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'subtitle' => ["required", 'string', 'min:5', "max:50"],
            'project_name' => ["required", 'string', "min:5", "max:255", "unique:projects"],
            'project_link' => ['nullable', 'string'],
            'project_image' => ['nullable', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
            'sub_description' => ["required", 'string', 'min:5', "max:255"],
            'description' => ["required", 'string', 'min:20'],
            'date' => ['required', 'date'],
            'meta_tag' => ['required', 'array', 'min:1', 'max:10'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'og_description' => ['required'],
            'og_title' => ['required'],
            'og_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'status' => ['required']
        ]);

        if ($request->has('project_image')) {
            $data['project_image'] = $request->file('project_image')->store('images/projects', 'public');
        }
        if ($request->has('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('images/projects', 'public');
        }

        $data['slug'] = Str::slug($request->project_name);

        // Convert the date format 'YYYY-MM-DD'
        $data['date'] = date('Y-m-d', strtotime($data['date']));

        Project::create($data);

        return redirect()->route('project.index')->with('status', 'A New Project as been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Project $project)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('back.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'subtitle' => ["required", 'string', 'min:5', "max:50"],
            'project_name' => ["required", 'string', "min:5", "max:255",  Rule::unique('projects')->ignore($project)],
            'project_link' => ['nullable', 'string'],
            'project_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'sub_description' => ["required", 'string', 'min:5', "max:255"],
            'date' => ['required', 'date'],
            'description' => ["required", 'string', 'min:20'],
            'meta_tag' => ['required', 'array', 'min:1', 'max:10'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'og_description' => ['required'],
            'og_title' => ['required'],
            'og_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'status' => ['required']
        ]);

        $data['date'] = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');

        if ($request->has('project_image')) {

            $data['project_image'] = $request->file('project_image')->store('images/projects', 'public');
        }
        if ($request->has('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('images/projects', 'public');
        }

        $data['slug'] = Str::slug($request->project_name);

        $project->update($data);
        return redirect()->route('project.index')->with('status', 'Project has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('status', 'A Project has been removed');
    }
}

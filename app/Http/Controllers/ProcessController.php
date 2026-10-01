<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processes = Process::all();
        return view('back.process.index', compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.process.create');
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
            'process_name' => ["required", 'string', "min:5", "max:255", "unique:processes"],
            'process_image' => ['nullable', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
            'description' => ["required", 'string', 'min:20', "max:255"],
        ]);

        if ($request->has('process_image')) {
            $data['process_image'] = $request->file('process_image')->store('images/projects', 'public');
        }

        $data['slug'] = Str::slug($request->process_name);

        Process::create($data);

        return redirect()->route('process.index')->with('status', 'A New Process as been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        return view('back.process.edit', compact('process'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $process)
    {
        $data = $request->validate([
            'process_name' => ["required", 'string', "min:5", "max:255", "unique:processes"],
            'process_image' => ['nullable', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
            'description' => ["required", 'string', 'min:20', "max:255"],
        ]);

        if ($request->has('process_image')) {
            $data['process_image'] = $request->file('process_image')->store('images/projects', 'public');
        }

        $data['slug'] = Str::slug($request->process_name);

        $process->update($data);

        return redirect()->route('process.index')->with('status', 'Process as been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $process)
    {
        $process->delete();
        return redirect()->route('process.index')->with('status', 'Process as been Removed');
    }
}

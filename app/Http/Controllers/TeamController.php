<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('back.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.team.create');
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
            'name' => ['required', 'string', 'min:3', 'max:255', 'unique:teams'],
            'job_title' => ['required', 'string', 'min:3', 'max:255'],
            'linkedin_link' => ['nullable', 'string'],
        ]);
        $data['slug'] = Str::slug($request->name);
        if ($request->has('image')) {
            $data['image'] = $request->file('image')->store('images/process', 'public');
        }

        Team::create($data);
        return redirect()->route('team.index')->with('status', 'A New Team Member as been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('back.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255', Rule::unique('teams')->ignore($team)],
            'job_title' => ['required', 'string', 'min:3', 'max:255'],
            'linkedin_link' => ['nullable', 'string'],
        ]);
        $data['slug'] = Str::slug($request->name);
        if ($request->has('image')) {
            $data['image'] = $request->file('image')->store('images/process', 'public');
        }
        $team->update($data);

        return redirect()->route('team.index')->with('status', 'A New Team Member as been Added');
    }

    // public function updateOrder(Request $request)
    // {
    //     $data = $request->input('order');

    //     foreach ($data as $key => $value) {
    //         Team::where('id', $value['id'])->update(['order' => $key + 1]);
            
    //     }

    //     return response()->json(['success' => true]);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('status', 'A Team Member has been removed');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Template::all();
        return view('back.template.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Template $template)
    {
        $data = $request->validate([
            'template_name' => ['required', 'string', 'min:3', 'max:255'],
            'template_for' => ['required', 'string', 'min:3', 'max:255'],
            'subject' => ['required', 'string', 'min:3', 'max:255'],
            'status' => ['required'],
            'body' => ['required'],

        ]);
        $data['slug'] = Str::slug($request->template_name);

        Template::create($data);
        return redirect()->route('template.index')->with('status', 'A Template has been updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        return view('back.template.edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
    {
        $data = $request->validate([
            'subject' => ['required', 'string', 'min:3', 'max:255'],
            'body' => ['required'],
            'status' => ['required']
        ]);
        $template->update($data);
        return redirect()->route('template.index')->with('status', 'A Template has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        $template->delete();
        return redirect()->route('template.index')->with('status', 'A Template has been removed');
    }
}

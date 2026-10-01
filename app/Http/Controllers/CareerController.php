<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CareerCategory;
use Illuminate\Validation\Rule;

class CareerController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('permission:read-career')->only('index');
    //     $this->middleware('permission:create-career')->only('create', 'store');
    //     $this->middleware('permission:update-career')->only('edit', 'update');
    //     $this->middleware('permission:crud-career')->only('delete');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::with('category')->get();
        return view('back.career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $career_categories = CareerCategory::all();
        return view('back.career.create', compact('career_categories'));
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

            'career_category_id' => ["required"],
            'career_name' => ["required", 'string', "min:5", "max:255", "unique:careers"],
           
            'description' => ["required", 'string', 'max:255'],
            'body' => ["required", 'min:20'],
            'meta_keyword' => ["required"],
            'meta_description' => ["required"],
            'status' => ["nullable"]

        ]);

        $data['slug'] = Str::slug($request->career_name);

        Career::create($data);

        return redirect()->route('career.index')->with('status', 'A New Opening has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Career $career)
    {
        dd($career);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        $career_categories = CareerCategory::all();
        return view('back.career.edit', compact('career', 'career_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        $data = $request->validate([
            'career_category_id' => ["required"],
            'career_name' => ["required", 'string', "min:5", "max:25", Rule::unique('careers')->ignore($career)],
           
            'description' => ["required", 'string'],
            'body' => ["required", 'min:20'],
            'meta_keyword' => ["required"],
            'meta_description' => ["required"],
            'status' => ["nullable"]
        ]);




        $data['slug'] = Str::slug($request->career_name);

        $career->update($data);

        return redirect()->route('career.index')->with('status', 'A New Opening has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('career.index')->with('status', 'An Opening has been removed');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use Illuminate\Http\Request;

class HireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hires = Hire::all();
        return view('back.hire.index', compact('hires'));
    }

    public function show($id)
    {
        $hire = Hire::findOrFail($id);
        return view('back.hire.show', compact('hire'));
    }
    public function delete($id)
    {
        $hire = Hire::findOrFail($id);
        $hire->delete();
        return redirect()->route('hire.index')->with('status', 'A Hiring Application has been removed');
    }
}


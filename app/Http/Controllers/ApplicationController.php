<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Career;
use App\Models\Template;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Mail\ApplicationStatusEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Events\ApplicationStatusUpdated;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications =
            Application::with('career')->get();
        return view('back.application.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Career $career, Application $application)
    {

        return Inertia::render('Application', [
            'career' => $career,
            'application' => $application,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        $resume = Storage::disk('public')->get($application->resume);
        return view('back.application.show', compact('application', 'resume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(['Pending', 'Accept', 'Reject', 'Interview'])],
        ]);
        $application->update($data);

        event(new ApplicationStatusUpdated($application));

        $template = Template::where('template_for', $application->status)->first();
        if ($template) {
            Mail::to($application->email)->send(new ApplicationStatusEmail($template));
        }

        return back()->with('status', 'Application Status has been changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->route('application.index')->with('status', 'Application Has Been Deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Team;
use App\Models\Contact;
use App\Models\Process;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::count();
        $contacts = Contact::count();
        $teams = Team::count();
        $applications = Application::count();
        $projects = Project::count();
        $procedures = Process::count();


        $interview_application = Application::all();

        return view('back.index' , compact('interview_application' ,'procedures' , 'services' , 'teams' , 'contacts' , 'applications' , 'projects'));
    }
}

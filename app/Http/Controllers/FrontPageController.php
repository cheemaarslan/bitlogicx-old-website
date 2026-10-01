<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Faq;
use App\Models\Hire;
use App\Models\Team;
use Inertia\Inertia;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Process;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Template;
use App\Models\Application;
use App\Models\SiteContent;
use Illuminate\Http\Request;
use App\Models\CareerCategory;
use App\Models\HomePageManager;
use App\Models\AboutPageManager;
use App\Mail\ApplicationStatusEmail;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use App\Notifications\HireAProNotification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ApplicationSubmittedNotification;
use App\Notifications\ContactUsNotification;

class FrontPageController extends Controller
{
    public function index()
    {
        $home_page_content = HomePageManager::first();

        // Fetch services marked to be displayed on the home page
        $servicesOnHomePage = Service::where('status', 'Publish')->where('display_on_homepage', true)->take(6)->get();

        // Merge the two collections to get the services to display on the home page
        $services = $servicesOnHomePage;

        $projects = Project::where('status', 'Publish')->take(10)->get();
        $processes = Process::where('status', 'Publish')->take(6)->get();
        $teams = Team::take(4)->get();
        $enable_whatsapp = Setting::search('enable_whatsapp');
        $whatsapp_link = Setting::search('whatsapp_link');

        return Inertia::render('Home', [
            'home_page_content' => $home_page_content,
            'services' => $services,
            'projects' => $projects,
            'processes' => $processes,
            'teams' => $teams,
            'enable_whatsapp' => $enable_whatsapp,
            'whatsapp_link' => $whatsapp_link,
        ]);
    }

    public function about()
    {
        $about_page_content = AboutPageManager::first();
        $teams = Team::take($about_page_content->team_limit)->get();
        return Inertia::render('About', [
            'about_page_content' => $about_page_content,
            'teams' => $teams,
        ]);
    }
    public function services()
    {
        $services = Service::where('status', 'Publish')->get();
        return Inertia::render('Services', ['services' => $services]);
    }
    public function singleService(Service $service)
    {
        // Fetch the specific service along with its associated cards
        //        $service->load('cards');
        $allServices = Service::where('status', 'Publish')->get();
        return Inertia::render('SingleService', [
            'singleservice' => $service,
            'allServices' => $allServices,
            'serviceImage' => $service->service_image,
        ]);
    }

    public function our_work()
    {
        $projects = Project::where('status', 'Publish')->get();
        return Inertia::render('Projects', ['projects' => $projects]);
    }
    public function singleProject(Project $project)
    {
        return Inertia::render('SingleProject', [
            'singleproject' => $project,
            'projectImage' => $project->project_image,
        ]);
    }
    public function our_product()
    {
        $products = Product::where('status', 'Publish')->get();
        return Inertia::render('Products', ['products' => $products]);
    }
    public function singleProduct(Product $product)
    {
        return Inertia::render('SingleProduct', [
            'singleproduct' => $product,
            'productImage' => $product->product_image,
        ]);
    }
    public function team()
    {
        $teams = Team::all()->sortBy('order');
        // dd($teams);
        return Inertia::render('Teams', ['teams' => $teams]);
    }
    public function contact()
    {
        $NOCAPTCHA_SITEKEY = Setting::search('NOCAPTCHA_SITEKEY');
        $faqs = Faq::all();
        $enable_contact = Setting::search('enable_contact');
        return Inertia::render('Contact', [
            'NOCAPTCHA_SITEKEY' => $NOCAPTCHA_SITEKEY,
            'faqs' => $faqs,
            'enable_contact' => $enable_contact,
        ]);
    }
    public function hire()
    {

        return Inertia::render('Hire');
    }
    public function application(Career $career, Application $application)
    {
        $NOCAPTCHA_SITEKEY = Setting::search('NOCAPTCHA_SITEKEY');
        $enable_application = Setting::search('enable_application');
        error_log($NOCAPTCHA_SITEKEY);


        return Inertia::render('Application', [
            'NOCAPTCHA_SITEKEY' => $NOCAPTCHA_SITEKEY,
            'enable_application' => $enable_application,
            'career' => $career,
            'application' => $application,
        ]);
    }
    public function contact_store(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string', 'min:3', 'max:255'],
            'message' => ['required'],
        ]);

//         Retrieve the email template
         $template = Template::where('template_for', 'support')->first();

         if ($template) {
             // Send the application status email to the user
             Mail::to($request->email)->send(new ApplicationStatusEmail($template, $data));
         }

         // Send an email notification to the HR
         Notification::route('mail', 'contact@bitlogicx.com')
             ->notify(new ContactUsNotification($data));

        Contact::create($data);
        return redirect()->back()->with('status', 'Thank you for contacting us. Your response has been submitted.')->withInput();
    }
    public function hire_store(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'fname' => ['required', 'string', 'min:3', 'max:255'],
            'lname' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email'],
            'service' => ['required'],
            'message' => ['required'],
        ]);

        // Retrieve the email template
        $template = Template::where('template_for', 'hire')->first();

        if ($template) {
            // Send the application status email to the user
            Mail::to($request->email)->send(new ApplicationStatusEmail($template, $data));
        }

        // Send an email notification to the HR
        Notification::route('mail', 'hr@bitlogicx.com')
            ->notify(new HireAProNotification($data));

        Hire::create($data);
        return redirect()->back()->with('status', 'Thank you for contacting us. Your response has been submitted.')->withInput();
    }
    public function application_store(Request $request, Career $career)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'min:3', 'max:255'],
            'last_name' => ['required', 'string', 'min:3', 'max:255'],
            'contact_no' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email'],
            'gender' => ['required'],
            'resume' => ['required', 'mimetypes:application/pdf', 'max:10000'],
            'message' => ['nullable'],
        ]);
        $data['slug'] = Carbon::now()->timestamp;
        $data['career_id'] = $career->id;
        $file = $request->file('resume');
        $data['resume'] = $file->store('application', 'public');

        // Retrieve the email template
        $template = Template::where('template_for', 'received')->first();

        if ($template) {
            // Send the application status email to the user
            Mail::to($request->email)->send(new ApplicationStatusEmail($template, $data));
        }

        // Send an email notification to the HR
        Notification::route('mail', 'hr@bitlogicx.com')
            ->notify(new ApplicationSubmittedNotification($data));

        Application::create($data);

        return back()->with('status', 'Your Application has been submitted. We will be in touch.');
    }
    public function blogs()
    {
        $blogs = Blog::where('status', 'Publish')->get();
        return Inertia::render('Blogs', ['blogs' => $blogs]);
    }

    public function singleBlog(Blog $Blog)
    {
        $allBlogs = Blog::where('status', 'Publish')->get();
        return Inertia::render('SingleBlog', [
            'singleblog' => $Blog,
            'allBlogs' => $allBlogs,
            'BlogImage' => $Blog->Blog_image,
        ]);
    }

    public function get_quotation()
    {
        return Inertia::render('Quotation');
    }
    public function careers()
    {

        $careers = Career::where('status', 'Publish')->get();
        $setting = SiteContent::first();
        $career_categories = CareerCategory::with('careers')->where('status', 'Publish')->get();
        return Inertia::render('Career', [
            'setting' => $setting,
            'careers' => $careers,
            'career_categories' => $career_categories,
        ]);
    }
}

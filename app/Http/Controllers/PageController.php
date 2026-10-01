<?php

namespace App\Http\Controllers;

use App\Models\AboutPageManager;
use App\Models\HomePageManager;
use App\Models\Setting;
use App\Models\SiteContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $home = HomePageManager::first();
        return view('back.page.home', compact('home'));
    }
    public function about()
    {
        $about = AboutPageManager::first();
        return view('back.page.about', compact('about'));
    }
    public function setting_index()
    {
        $content = SiteContent::all()->keyBy('key');
        return view('back.page.setting', compact('content'));
    }
    public function setting_update(Request $request)
    {
        $data = $request->validate([
            'app_name' => ['required', 'string', 'min:3', 'max:255'],
            'app_description' => ['required', 'string', 'min:3', 'max:255'],
            'app_logo' => ['nullable', 'string', 'min:3', 'max:255'],
            'app_favicon' => ['nullable', 'string', 'min:3', 'max:255'],
            'primary_color' => ['required', 'string', 'min:3', 'max:255'],
            'secondary_color' => ['required', 'string', 'min:3', 'max:255'],
            'contact_email' => ['required', 'string', 'min:3', 'max:255'],
            'contact_no' => ['required', 'string', 'min:3', 'max:255'],
            'contact_address' => ['required', 'string', 'min:3', 'max:255'],
            'facebook' => ['nullable', 'string', 'min:3', 'max:255'],
            'twitter' => ['nullable', 'string', 'min:3', 'max:255'],
            'instagram' => ['nullable', 'string', 'min:3', 'max:255'],
            'linkedin' => ['nullable', 'string', 'min:3', 'max:255'],
            'footer_text' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        $content = SiteContent::all()->keyBy('key');
        return view('back.page.setting', compact('content'));
    }
}

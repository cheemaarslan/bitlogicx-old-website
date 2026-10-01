<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Models\Setting;
use App\Models\SiteContent;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $content = SiteContent::all()->keyBy('key');
        return view('back.setting.index', compact('setting', 'content'));
    }
    public function general(Request $request)
    {
    }
    public function smtp(Request $request)
    {
        $data = $request->validate([
            'MAIL_DRIVER' => ['required', 'string', 'min:3', 'max:255'],
            'OFFICE365MAIL_CLIENT_ID' => ['required', 'string', 'min:3', 'max:255'],
            'OFFICE365MAIL_TENANT' => ['required', 'string', 'min:3', 'max:255'],
            'OFFICE365MAIL_CLIENT_SECRET' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $setting = Setting::first();
        $setting->update($data);
        return back()->with('status', 'Your SMTP Settings has been updated');
    }
    public function whatsapp(Request $request)
    {
        $data = $request->validate([
            'whatsapp_link' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $setting = Setting::first();
        $setting->update($data);
        return back()->with('status', 'Your Whatsapp Link has been updated');
    }
    public function recaptcha(Request $request)
    {
        $data = $request->validate([
            'NOCAPTCHA_SITEKEY' => ['required', 'string', 'min:3', 'max:255'],
            'NOCAPTCHA_SECRET' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $setting = Setting::first();
        $setting->update($data);
        return back()->with('status', 'Your reCaptcha Keys has been updated');
    }
    public function other(Request $request)
    {
        $data = $request->validate([
            'enable_contact' => ['sometimes'],
            'enable_application' => ['sometimes'],
            'enable_whatsapp' => ['sometimes'],
            'enable_news' => ['sometimes'],
        ]);
        // Set default values for checkboxes that were not sent with the request
        $data['enable_contact'] = $request->has('enable_contact') ? 1 : 0;
        $data['enable_application'] = $request->has('enable_application') ? 1 : 0;
        $data['enable_whatsapp'] = $request->has('enable_whatsapp') ? 1 : 0;
        $data['enable_news'] = $request->has('enable_news') ? 1 : 0;

        $setting = Setting::first();
        $setting->update($data);
        return back()->with('status', 'Your Setting has been updated');
    }
}

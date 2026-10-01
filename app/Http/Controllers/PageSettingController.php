<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageSettingController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->validate([
            'app_name' => ['required', 'string', 'min:3', 'max:255'],
            'app_description' => ['required', 'string', 'min:3', 'max:255'],
            'app_logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif'],
            'app_favicon' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif'],

            'contact_no' => ['required', 'string', 'min:3', 'max:255'],
            'contact_email' => ['required', 'string', 'min:3', 'max:255'],
            'contact_address' => ['required', 'string', 'min:3', 'max:255'],

            'facebook' => ['nullable', 'string', 'min:3', 'max:255'],
            'twitter' => ['nullable', 'string', 'min:3', 'max:255'],
            'instagram' => ['nullable', 'string', 'min:3', 'max:255'],
            'linkedin' => ['nullable', 'string', 'min:3', 'max:255'],

            'footer_text' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        if ($request->has('app_logo')) {
            $data['app_logo'] = $request->file('app_logo')->store('images/logo', 'public');
            $data['app_logo'] = asset('storage/' . $data['app_logo']);
        }
        if ($request->has('app_favicon')) {
            $data['app_favicon'] = $request->file('app_favicon')->store('images/favicon', 'public');
            $data['app_favicon'] = asset('storage/' . $data['app_favicon']);
        }
        foreach ($data as $key => $value) {
            $content = SiteContent::where('key', $key)->first();
            if ($content != null) {
                $content->value = $value;
                $content->save();
            } else {
                Log::warning("Setting not found for key: $key");
            }
        }


        // $settingModels = collect();
        // foreach ($settings as $key => $value) {
        //     $settingModels->push(new SiteContent(['key' => $key, 'value' => $value]));
        // }
        // SiteContent::saveMany($settingModels);

        return back()->with('status', 'Site Setting has been updated');
    }
}

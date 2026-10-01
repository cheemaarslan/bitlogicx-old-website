<?php

namespace App\Http\Controllers;

use App\Models\HomePageManager;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function banner(Request $request)
    {
        $data = $request->validate([
            'banner_heading' => ['required', 'string', 'min:3', 'max:255'],
            'banner_description' => 'nullable',
            'banner_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'banner_button_text' => ['required', 'string', 'min:3', 'max:255'],
            'banner_button_link' => ['required', 'string', 'min:3', 'max:255'],
            'enable_banner_section' => ['nullable'],
        ]);
        $data['enable_banner_section'] = false;
        if ($request->has('enable_banner_section')) {
            $data['enable_banner_section'] = true;
        }
        if ($request->has('banner_image')) {
            $data['banner_image'] = $request->file('banner_image')->store('images/front', 'public');
        }
        $page = HomePageManager::first();
        $page->update($data);
        return back()->with('status', 'Banner Setting has been updated');
    }
    public function project(Request $request)
    {
        $data = $request->validate([
            'project_heading' => ['required', 'string', 'min:3', 'max:255'],
            'project_limit' => ['required', 'integer'],
            'enable_project_section' => ['nullable'],
        ]);
        $data['enable_project_section'] = false;
        if ($request->has('enable_project_section')) {
            $data['enable_project_section'] = true;
        }
        $page = HomePageManager::first();
        $page->update($data);
        return back()->with('status', 'Project Setting has been updated');
    }
    public function product(Request $request)
    {
        $data = $request->validate([
            'product_heading' => ['required', 'string', 'min:3', 'max:255'],
            'product_limit' => ['required', 'integer'],
            'enable_product_section' => ['nullable'],
        ]);
        $data['enable_product_section'] = false;
        if ($request->has('enable_product_section')) {
            $data['enable_product_section'] = true;
        }
        $page = HomePageManager::first();
        $page->update($data);
        return back()->with('status', 'Product Setting has been updated');
    }

    public function service(Request $request)
    {
        $data = $request->validate([
            'service_heading' => ['required', 'string', 'min:3', 'max:255'],
            'service_limit' => ['required', 'integer'],
            'enable_service_section' => ['nullable'],
        ]);
        $data['enable_service_section'] = false;
        if ($request->has('enable_service_section')) {
            $data['enable_service_section'] = true;
        }
        $page = HomePageManager::first();
        $page->update($data);
        return back()->with('status', 'Service Setting has been updated');
    }
    public function process(Request $request)
    {
        $data = $request->validate([
            'process_heading' => ['required', 'string', 'min:3', 'max:255'],
            'process_limit' => ['required', 'integer'],
            'enable_process_section' => ['nullable'],
        ]);
        $data['enable_process_section'] = false;
        if ($request->has('enable_process_section')) {
            $data['enable_process_section'] = true;
        }
        $page = HomePageManager::first();
        $page->update($data);
        return back()->with('status', 'Process Setting has been updated');
    }
    public function team(Request $request)
    {
        $data = $request->validate([
            'team_heading' => ['required', 'string', 'min:3', 'max:255'],
            'team_limit' => ['required', 'integer'],
            'enable_team_section' => ['nullable'],
        ]);
        $data['enable_team_section'] = false;
        if ($request->has('enable_team_section')) {
            $data['enable_team_section'] = true;
        }
        $page = HomePageManager::first();
        $page->update($data);
        return back()->with('status', 'Team Setting has been updated');
    }
}

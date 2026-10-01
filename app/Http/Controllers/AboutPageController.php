<?php

namespace App\Http\Controllers;

use App\Models\AboutPageManager;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->validate([
            'banner_heading' => ['required', 'string', 'min:3', 'max:255'],
            'body' => 'nullable',
        ]);

        $about = AboutPageManager::first();
        $about->update($data);
        return back()->with('status', 'About Page has been updated');
    }
}

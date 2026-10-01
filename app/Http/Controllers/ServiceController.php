<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Card;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('back.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Service $service)
    {
        $data = $request->validate([

            'subtitle' => ["required", 'string', 'min:5', "max:50"],
            'service_name' => ["required", 'string', "min:5", "max:255", "unique:services"],
            'service_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'description' => ["required", 'string', 'min:20'],
            'banner_service_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'sub_description' => ["required", 'string', 'min:5', "max:255"],
            'meta_tag' => ['required', 'array', 'min:1', 'max:10'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'og_description' => ['required'],
            'og_title' => ['required'],
            'og_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'status' => ['required']
        ]);
        $data['slug'] = Str::slug($request->service_name);

        if ($request->has('service_image')) {

            $data['service_image'] = $request->file('service_image')->store('images/services', 'public');
        }
        if ($request->has('banner_service_image')) {

            $data['banner_service_image'] = $request->file('banner_service_image')->store('images/services', 'public');
        }
        if ($request->has('og_image')) {

            $data['og_image'] = $request->file('og_image')->store('images/services', 'public');
        }

        // Check if the "display_on_homepage" checkbox is checked
        $data['display_on_homepage'] = $request->has('display_on_homepage');

        Service::create($data);

//         Process cards
//        if ($request->has('cards')) {
//            foreach ($request->cards as $cardData) {
//                // Create a new card associated with the service
//                $service->cards()->create($cardData);
//            }
//        }

        return redirect()->route('service.index')->with('status', 'A New Service as been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('back.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'subtitle' => ["required", 'string', 'min:5', "max:50"],
            'service_name' => ["required", 'string', "min:5", "max:255",  Rule::unique('services')->ignore($service)],
            'service_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'description' => ["required", 'string', 'min:20'],
            'banner_service_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'sub_description' => ["required", 'string', 'min:5', "max:255"],
            'meta_tag' => ['required', 'array', 'min:1', 'max:10'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'og_description' => ['required'],
            'og_title' => ['required'],
            'og_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'status' => ['required'],
//            'cards.*.id' => 'nullable|exists:cards,id',
//            'cards.*.title' => 'required|string|max:255',
//            'cards.*.description' => 'required|string|max:255',
        ]);

        $data['slug'] = Str::slug($request->service_name);

        // Process service image uploads
        if ($request->hasFile('service_image')) {
            $data['service_image'] = $request->file('service_image')->store('images/services', 'public');
        }

        // Process banner image uploads
        if ($request->hasFile('banner_service_image')) {
            $data['banner_service_image'] = $request->file('banner_service_image')->store('images/services', 'public');
        }

        // Process OG image uploads
        if ($request->hasFile('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('images/services', 'public');
        }

        // Update service attributes
        $service->update($data);

//        if ($request->has('cards')) {
//            // Update existing cards or create new ones
//            foreach ($request->cards as $cardData) {
//                // Ensure $cardData has an 'id' key
//                if (isset($cardData['id'])) {
//                    // Find the card by ID
//                    $card = Card::findOrFail($cardData['id']);
//                    // Update the card's attributes
//                    $card->update($cardData);
//                } else {
//                    // Create a new card associated with the service
//                    $service->cards()->create($cardData);
//                }
//            }
//        }

        return redirect()->route('service.index')->with('status', 'The service has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('status', 'A Service has been removed');
    }
}

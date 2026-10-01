<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('back.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'subtitle' => ["required", 'string', 'min:5', "max:50"],
            'product_name' => ["required", 'string', "min:5", "max:255", "unique:products"],
            'product_link' => ['nullable', 'string'],
            'product_image' => ['nullable', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
            'sub_description' => ["required", 'string', 'min:5', "max:255"],
            'description' => ["required", 'string', 'min:20'],
            'date' => ['required', 'date'],
            'meta_tag' => ['required', 'array', 'min:1', 'max:10'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'og_description' => ['required'],
            'og_title' => ['required'],
            'og_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'status' => ['required'],
            // 'banner_service_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],

        ]);

        // Process image uploads
        if ($request->has('product_image')) {
            $data['product_image'] = $request->file('product_image')->store('images/products', 'public');
        }
        if ($request->has('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('images/products', 'public');
        }

        // Generate slug
        $data['slug'] = Str::slug($data['product_name']);

        // Convert the date format from '02-Oct-1976' to 'YYYY-MM-DD'
        $data['date'] = date('Y-m-d', strtotime($data['date']));

        // Create new product
        Product::create($data);

        return redirect()->route('product.index')->with('status', 'A New Product as been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('back.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'subtitle' => ["required", 'string', 'min:5', "max:50"],
            'product_name' => ["required", 'string', "min:5", "max:255",  Rule::unique('products')->ignore($product)],
            'product_link' => ['nullable', 'string'],
            'product_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'sub_description' => ["required", 'string', 'min:5', "max:255"],
            'date' => ['required', 'date'],
            'description' => ["required", 'string', 'min:20'],
            'meta_tag' => ['required', 'array', 'min:1', 'max:10'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'og_description' => ['required'],
            'og_title' => ['required'],
            'og_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'status' => ['required']

        ]);

        // Convert date format from 'd-m-Y' to 'Y-m-d'
        $data['date'] = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');

        if ($request->has('product_image')) {

            $data['product_image'] = $request->file('product_image')->store('images/products', 'public');
        }
        if ($request->has('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('images/products', 'public');
        }

        $data['slug'] = Str::slug($request->product_name);

        $product->update($data);
        return redirect()->route('product.index')->with('status', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('status', 'A Product has been removed');
    }
}

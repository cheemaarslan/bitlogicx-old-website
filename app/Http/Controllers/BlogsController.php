<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('back.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.blogs.create');
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
            'blog_name' => ["required", 'string', "min:5", "max:255", "unique:blogs"],
            'blog_image' => ['nullable', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
            'author_image' => ['nullable', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
            'author_name' => ["required", 'string', "min:5", "max:30"],
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
        ]);

        // Process image uploads
        if ($request->has('blog_image')) {
            $data['blog_image'] = $request->file('blog_image')->store('images/blogs', 'public');
        }
        if ($request->has('author_image')) {
            $data['author_image'] = $request->file('author_image')->store('images/blogs', 'public');
        }
        if ($request->has('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('images/blogs', 'public');
        }

        // Generate slug
        $data['slug'] = Str::slug($data['blog_name']);

        // Convert date format from 'd-m-Y' to 'Y-m-d'
        $data['date'] = Carbon::parse($data['date'])->format('Y-m-d');

        // Create new blog
        Blog::create($data);

        return redirect()->route('blog.index')->with('status', 'A New blog as been created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('back.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'blog_name' => ["required", 'string', "min:5", "max:255",  Rule::unique('blogs')->ignore($blog)],
            'blog_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'author_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'author_name' => ["required", 'string', 'min:5', "max:255"],
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
        $data['date'] = Carbon::parse($data['date'])->format('Y-m-d');

        if ($request->has('blog_image')) {

            $data['blog_image'] = $request->file('blog_image')->store('images/blogs', 'public');
        }
        if ($request->has('author_image')) {

            $data['author_image'] = $request->file('author_image')->store('images/blogs', 'public');
        }
        if ($request->has('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('images/blogs', 'public');
        }

        $data['slug'] = Str::slug($request->blog_name);

        $blog->update($data);
        
        return redirect()->route('blog.index')->with('status', 'Blog has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('status', 'A Blog has been removed');
    }
}

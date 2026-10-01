<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rules\OldPasswordRule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class   UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile_edit()
    {
        return view('back.user.profile');
    }

    public function profile_update(Request $request)
    {

        dd($request);

        $data = $request->validate([
            'user_name' => ['required', 'string', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required'],
        ]);

        if ($request->has('image')) {
            $data['image'] = $request->file('image')->store('images/users', 'public');
        }

        $user = Auth::user();



        return view('back.user.profile');
    }

    public function change_password_index()
    {
        return view('back.user.change-password');
    }

    public function change_password_update(Request $request)
    {

        $data = $request->validate([
            'old_password' => ['required', new OldPasswordRule],
            'password' => ['required', 'string', 'min:8', Password::min(8)->symbols()],
            'password_confirmation' => ['same:password'],
        ]);
        $password = Hash::make($request->password);
        auth()->user()->update(['password' => $password]);
        return redirect()->route('home')->with('status', 'User Password has been updated');
    }
}

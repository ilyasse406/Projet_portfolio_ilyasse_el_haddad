<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        // return view("admin", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $request->validate([
            "birthday" => "required",
            "website" => "required",
            "phone" => "required",
            "city" => "required",
            "age" => "required",
            "degree" => "required",
            "email" => "required",
            "freelance" => "required",
            "image" => "required",
        ]);

        $user->birthday = $request->birthday;
        $user->website = $request->website;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->degree = $request->degree;
        $user->email = $request->email;
        $user->freelance = $request->freelance;
        $user->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        
        $user->save();
        return redirect()->route("admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "birthday" => "required",
            "website" => "required",
            "phone" => "required",
            "city" => "required",
            "age" => "required",
            "degree" => "required",
            "email" => "required",
            "freelance" => "required",
            "image" => "required",
        ]);

        $user->birthday = $request->birthday;
        $user->website = $request->website;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->degree = $request->degree;
        $user->email = $request->email;
        $user->freelance = $request->freelance;
        Storage::disk("public")->delete("img/"  .  $user->image);
        $user->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $user->save();
        return redirect()->route("admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        Storage::disk("public")->delete("img/"  .  $user->image);
        return  redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts=Fact::all();
        return view("facts", compact("facts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("factss.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fact = new Fact();
        $request->validate([
            "client" => "required",
            "project" => "required",
            "support" => "required",
            "hard" => "required",


        ]);
        $fact->client = $request->client;
        $fact->project = $request->project;
        $fact->support = $request->support;
        $fact->hard = $request->hard;
        $fact->save();
        return redirect()->route("admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function show(Fact $fact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function edit(Fact $fact)
    {
        return  view("factss.edit", compact("fact"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fact $fact)
    {
        $request->validate([
            "client" => "required",
            "project" => "required",
            "support" => "required",
            "hard" => "required",


        ]);
        $fact->client = $request->client;
        $fact->project = $request->project;
        $fact->support = $request->support;
        $fact->hard = $request->hard;
        $fact->save();
        return redirect()->route("admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fact $fact)
    {
        $fact->delete();
    
        return redirect()->back();
    }
}

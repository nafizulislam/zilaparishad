<?php

namespace App\Http\Controllers;

use App\Models\Sarok;
use App\Models\Project;
use Illuminate\Http\Request;

class SarokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $project = Project::orderBy('id','desc')->get();
        $sarok = Sarok::orderBy('id','desc')->get();
        return view('Projects.sarok',['sarok'=>$sarok]);
    }

    public function projectDetails($id){
        $data = Sarok::find($id);
        return response([
            'data' => $data
        ]);
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
        // $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required',

        //     'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $input = $request->all();


        Sarok::create($input);

        return redirect()->route('sarok.index')
                        ->with('message','মন্ত্রনালয়ের স্মারক নম্বর সংযোগ হয়েছে');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sarok  $sarok
     * @return \Illuminate\Http\Response
     */
    public function show(Sarok $sarok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sarok  $sarok
     * @return \Illuminate\Http\Response
     */
    public function edit(Sarok $sarok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sarok  $sarok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sarok $sarok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sarok  $sarok
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sarok = Sarok::find($id);
        $sarok->delete();
        return redirect()->back()->with('message','স্মারক ডিলিট হয়েছে ');
    }

    public function delete($id)
    {
        $sarok = Sarok::find($id);
        $sarok->delete();
        return redirect()->back()->with('message','স্মারক ডিলিট হয়েছে ');
    }
}

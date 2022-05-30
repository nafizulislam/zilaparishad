<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cost = Cost::all();
        return view('EarnCost.cost_source',['cost'=>$cost]);
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

    public function getDataById($id){
        $cost = Cost::find($id);
        return response()->json([
            'data' => $cost
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cost = new Cost();
        $cost->cost_source = $request->cost_source;
        $cost->save();
        return redirect()->back()->with('message','নতুন ব্যায়ের উৎস তালিকা ভুক্ত হয়েছে ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function show(Cost $cost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function edit(Cost $cost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cost = Cost::find($id);
        $cost->cost_source = $request->cost_source;
        $cost->save();
        return response()->json([
            'data' => $cost,
            'error' => false,
            'message' => 'নতুন ব্যায়ের উৎস তালিকা ভুক্ত হয়েছে '
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cost = Cost::find($id);
        $cost->delete();
        return redirect()->back()->with('message','ব্যায়ের উৎস ডিলিট হয়েছে ');
    }

    public function delete($id)
    {
        $cost = Cost::find($id);
        $cost->delete();
        return redirect()->back()->with('message','ব্যায়ের উৎস ডিলিট হয়েছে ');
    }
}

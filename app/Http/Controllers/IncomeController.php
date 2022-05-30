<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income_source = Income::all();
        return view('EarnCost.income_source',['income_source'=>$income_source]);
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
        $income = new Income();
        $income->income_source = $request->income_source;
        $income->save();
        return redirect()->back()->with('message','নতুন আয়ের উৎস তালিকা ভুক্ত হয়েছে ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */

    public function getDataById($id){
        $income = Income::find($id);
        return response()->json([
            'data' => $income
        ]);
    }

    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $income = Income::find($id);
        $income->income_source = $request->income_source;
        $income->save();
        return response()->json([
            'data' => $income,
            'error' => false,
            'message' => 'নতুন আয়ের উৎস তালিকা ভুক্ত হয়েছে '
        ]);
        // return redirect()->back()->with('message','নতুন আয়ের উৎস তালিকা ভুক্ত হয়েছে ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $income = Income::find($id);
        $income->delete();
        return redirect()->back()->with('message','আয়ের উৎস ডিলিট হয়েছে ');
    }

    public function delete($id){
        $income = Income::find($id);
        $income->delete();
        return redirect()->back()->with('message','আয়ের উৎস ডিলিট হয়েছে ');
    }
}

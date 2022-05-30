<?php

namespace App\Http\Controllers;

use App\Models\Varatia;
use App\Models\Thikadar;
use Illuminate\Http\Request;

class VaratiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varatia=Varatia::get();
        return view('Clients.varatia',['varatia'=>$varatia]);
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

    public function details($id){
        // dd($id);
        $varatia_details = Varatia::find($id);
                                // ->join('projects','projects.id','pcis.project_id')
                                // ->select('pcis.*','projects.*')->first();

        // $pci_project_details = pci::join('projects','projects.id',$id)
        //                                 ->select('pcis.*','projects.*')->first();

        return response([
            'data' => $varatia_details
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
        $request->validate([
            'owner_name' => 'required',
            'owner_phone' => 'required',

            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($photo = $request->file('photo')) {
            $destinationPath = 'image/';
            $photoImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $photoImage);
            $input['photo'] = "$photoImage";
        }

        if ($document = $request->file('documents')) {
            $destinationPath = 'image/';
            $documentImage = date('YmdHis') . "." . $document->getClientOriginalExtension();
            $document->move($destinationPath, $documentImage);
            $input['documents'] = "$documentImage";
        }

        Varatia::create($input);

        return redirect()->back()
                        ->with('message','ভাড়াটিয়া সংযুক্ত হয়েছে ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Varatia  $varatia
     * @return \Illuminate\Http\Response
     */
    public function show(Varatia $varatia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Varatia  $varatia
     * @return \Illuminate\Http\Response
     */
    public function edit(Varatia $varatia)
    {
        //
    }

    public function getDataById($id){
        $varatia_details = Varatia::find($id);

        return response([
            'data' => $varatia_details
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Varatia  $varatia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $thikadar = Varatia::find($id);
        $thikadar->owner_name = $request->owner_name;
        $thikadar->owner_phone = $request->owner_phone;
        if (!empty($photo = $request->file('photo')) && $request->hasFile('photo')) {
            $destinationPath = 'image/';
            $photoImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $photoImage);
            $thikadar->photo = "$photoImage";
        }
        $thikadar->owner_nid = $request->owner_nid;
        $thikadar->present_address = $request->present_address;
        $thikadar->permanent_address = $request->permanent_address;
        $thikadar->org_name = $request->org_name;
        $thikadar->org_address = $request->org_address;
        $thikadar->license = $request->license;
        $thikadar->license_date = $request->license_date;
        $thikadar->bank_name = $request->bank_name;
        $thikadar->bank_account = $request->bank_account;
        $thikadar->branch = $request->branch;
        $thikadar->sarok_no = $request->sarok_no;
        if (!empty($document = $request->file('document')) && $request->hasFile('document')) {
            $destinationPath = 'image/';
            $documentImage = date('YmdHis') . "." . $document->getClientOriginalExtension();
            $document->move($destinationPath, $documentImage);
            $thikadar->document = "$documentImage";
        }
        $thikadar->save();

        return response([
            'error' => false,
            'data' => $thikadar
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Varatia  $varatia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $varatia = Varatia::find($id);
        $varatia->delete();
        return back();
    }

    public function delete($id)
    {
        $varatia = Varatia::find($id);
        $varatia->delete();
        return redirect()->back()->with('message','ভাড়াটিয়া ডিলিট হয়েছে ');
    }
}

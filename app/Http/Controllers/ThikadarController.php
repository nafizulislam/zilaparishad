<?php

namespace App\Http\Controllers;

use App\Models\Thikadar;
use Illuminate\Http\Request;

class ThikadarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $thikadar=Thikadar::orderBy('id', 'DESC')->get();
        return view('Clients.thikadar', compact('thikadar'));
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

        Thikadar::create($input);

        return redirect()->route('thikadar.index')
                        ->with('message','ঠিকাদার সংযুক্ত হয়েছে ');
    }


    public function details($id){
        // dd($id);
        $thikadar_details = Thikadar::find($id);
                                // ->join('projects','projects.id','pcis.project_id')
                                // ->select('pcis.*','projects.*')->first();

        // $pci_project_details = pci::join('projects','projects.id',$id)
        //                                 ->select('pcis.*','projects.*')->first();

        return response([
            'data' => $thikadar_details
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thikadar  $thikadar
     * @return \Illuminate\Http\Response
     */
    public function show(Thikadar $thikadar)
    {
        //
    }

    public function getDataById($id){
        $thikadar_details = Thikadar::find($id);

        return response([
            'data' => $thikadar_details
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thikadar  $thikadar
     * @return \Illuminate\Http\Response
     */
    public function edit(Thikadar $thikadar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thikadar  $thikadar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $thikadar = Thikadar::find($id);
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
     * @param  \App\Models\Thikadar  $thikadar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thikadar = Thikadar::find($id);
        $thikadar->delete();
        return back();
    }

    public function delete($id)
    {
        $thikadar = Thikadar::find($id);
        $thikadar->delete();
        return redirect()->back()->with('message','ঠিকাদার ডিলিট হয়েছে ');
    }
}

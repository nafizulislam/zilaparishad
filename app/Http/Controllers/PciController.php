<?php

namespace App\Http\Controllers;

use App\Models\pci;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pci = pci::orderBy('id','desc')
        ->join('projects','pcis.project_id','projects.id')
        ->select('pcis.*','projects.prokolpo_name as prokolpo', 'projects.amount as amount')
        ->get();

        $project = Project::get();
        return view('Clients.client', compact('pci','project'));
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
            'name' => 'required|min:3',
            'phone' => 'required|digits:11|numeric',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            'nid' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'authorise_person' => 'required',
            'authorise_person_mobile' => 'required',
            'authorise_person_nid' => 'required',
            'bank_name' => 'required',
            'bank_account' => 'required',
            'branch' => 'required',
            'document' => 'required',
            'project_id' => 'required',
        ]);

        

        $input = $request->all();


        if (!empty($photo = $request->file('photo')) && $request->hasFile('photo')) {
            $destinationPath = 'image/';
            $photoImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $photoImage);
            $input['photo'] = "$photoImage";
        }
        else{
            $input['photo'] = "";
        }


        if (!empty($document = $request->file('document')) && $request->hasFile('document')) {
            $destinationPath = 'image/';
            $documentImage = date('YmdHis') . "." . $document->getClientOriginalExtension();
            $document->move($destinationPath, $documentImage);
            $input['document'] = "$documentImage";
        }

        $save = pci::create($input);

        // return redirect()->route('client.index')
        //                 ->with('message','পিআইসি হোল্ডার সংযোগ হয়েছে');

        if ($save) {
            return redirect()->route('client.index')
                        ->with('message','পিআইসি হোল্ডার সংযোগ হয়েছে');
        }else{
            return redirect()->route('client.index')
                        ->with('error','পিআইসি হোল্ডার সংযোগ হয়নি ');
        }


    }

    

    public function details($id){
        // dd($id);
        $pci_details = DB::table('pcis')
            ->leftJoin('projects', 'pcis.project_id', 'projects.id')
            ->select('pcis.*', 'projects.*')
            ->where('pcis.id','=', $id)
            ->first();
            
            
        // $pci_details = pci::find($id);
        //                         ->join('projects','projects.id','pcis.projects_id')
        //                         ->select('pcis.*','projects.*')
        //                         ->first();

        // $pci_project_details = pci::join('projects','projects.id',$id)
        //                                 ->select('pcis.*','projects.*')->first();

        return response([
            'data' => $pci_details
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pci  $pci
     * @return \Illuminate\Http\Response
     */
    public function show(pci $pci)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pci  $pci
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        dd($request);
    }

    public function getDataById($id)
    {
        $pci= pci::find($id);
        return response([
            'data' => $pci
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pci  $pci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required',
            'nid' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'authorise_person' => 'required',
            'authorise_person_mobile' => 'required',
            'authorise_person_nid' => 'required',
            'bank_name' => 'required',
            'bank_account' => 'required',
            'branch' => 'required',
        ]);

        $pci = pci::find($id);
        $pci->name = $request->name;
        $pci->phone = $request->phone;
        if (!empty($photo = $request->file('photo')) && $request->hasFile('photo')) {
            $destinationPath = 'image/';
            $photoImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $photoImage);
            $pci->photo = "$photoImage";
        }
        $pci->nid = $request->nid;
        $pci->present_address = $request->present_address;
        $pci->permanent_address = $request->permanent_address;
        $pci->authorise_person = $request->authorise_person;
        $pci->authorise_person_mobile = $request->authorise_person_mobile;
        $pci->authorise_person_nid = $request->authorise_person_nid;
        $pci->bank_name = $request->bank_name;
        $pci->bank_account = $request->bank_account;
        $pci->branch = $request->branch;
        if (!empty($document = $request->file('document')) && $request->hasFile('document')) {
            $destinationPath = 'image/';
            $documentImage = date('YmdHis') . "." . $document->getClientOriginalExtension();
            $document->move($destinationPath, $documentImage);
            $pci->document = "$documentImage";
        }
        // $pci->save();

        if ($pci->save()) {
            return response([
                'error' => false,
                'Succes' => 'successfully updated',
                'data' => $request,
            ]);
            // return back()->with('message','পিআইসি হোল্ডার আপডেট হয়েছে');
        }else{
            return response([
                'error' => true,
                'message' => 'Failed to update',
                'data' => $request,
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pci  $pci
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pci = pci::find($id);
        $pci->delete();
        return redirect()->back()->with('message','পিআইসি হোল্ডার ডিলিট হয়েছে ');
    }

    public function delete($id)
    {
        $pci = pci::find($id);
        $pci->delete();
        return redirect()->back()->with('message','পিআইসি হোল্ডার ডিলিট হয়েছে ');
    }

//     public function basicAdd(Request $request,$id)
//     {
//         $pci = Project::findOrFail($id);
//         $pci->name = $request->input('name');
//         $pci->phone = $request->input('phone');
//         $pci->present_address = $request->input('present_address');
//         $pci->permanent_address = $request->input('permanent_address');
//         $pci->nid = $request->input('nid');
//     if($request->file('photo'))
//     {
//         $file = $request->file('photo');
//         $extention = $file->getClientOriginalExtension();
//         $filename = time().'.'. $extention ;
//         $file->move('upload/client/', $filename);
//         $pci->photo =$filename;
//     }
//     $pci->photo = $request->input('photo');
//     $pci->authorise_person = $request->input('authorise_person');
//     $pci->authorise_person_mobile = $request->input('authorise_person_mobile');
//     $pci->authorise_person_nid = $request->input('authorise_person_nid');
//     $pci->document = $request->input('document');
//     if($request->file('document'))
//     {
//         $file = $request->file('document');
//         $extention = $file->getClientOriginalExtension();
//         $filename = time().'.'. $extention ;
//         $file->move('upload/client/', $filename);
//         $pci->document =$filename;
//     }
//     $pci->bank_name = $request->input('bank_name');
//     $pci->bank_account = $request->input('bank_account');
//     $pci->branch = $request->input('branch');
//     $pci->save($request->all());
//     return redirect()->back()->with('message','PCI ADD হয়েছে ');
// }
}

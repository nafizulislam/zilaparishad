<?php

namespace App\Http\Controllers;

use App\Models\pci;
use App\Models\Sarok;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Imports\ProjectImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
// use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarok = Sarok::get();
        $project = Project::orderBy('id','desc')->where('packages',0)->get();

            return view('Projects.project',['project' => $project,'sarok'=>$sarok]);

    }


    // pcis.project_id

    public function details($id){

        $pci_details = DB::table('projects')
            ->leftJoin('pcis','projects.pic_id', 'pcis.id')
            ->select('pcis.*', 'projects.*')
            ->where('projects.id','=', $id)
            ->first();


        // $pci_details = Project::find($id)

        //                         ->join('pcis','pcis.id','projects.id')
        //                         ->select('pcis.*','projects.*')->first($id);

        // $pci_project_details = pci::join('projects','projects.id',$id)
        //                                 ->select('pcis.*','projects.*')->first();
        return response([
            'data' => $pci_details,
            // 'project' => $pci_project_details
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


        if (!empty($photo = $request->file('prokolpo_notice')) && $request->hasFile('prokolpo_notice')) {
            $destinationPath = 'image/';
            $photoImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $photoImage);
            $input['prokolpo_notice'] = "$photoImage";
        }
        else{
            $input['prokolpo_notice'] = "";
        }


        if (!empty($document = $request->file('prokolpo_rate')) && $request->hasFile('prokolpo_rate')) {
            $destinationPath = 'image/';
            $documentImage = date('YmdHis') . "." . $document->getClientOriginalExtension();
            $document->move($destinationPath, $documentImage);
            $input['prokolpo_rate'] = "$documentImage";
        }else{
            $input['prokolpo_rate'] = "";
        }

        if (!empty($document3 = $request->file('prokolpo_list')) && $request->hasFile('prokolpo_list')) {
            $destinationPath = 'image/';
            $documentImage3 = date('YmdHis') . "." . $document3->getClientOriginalExtension();
            $document3->move($destinationPath, $documentImage3);
            $input['prokolpo_list'] = "$documentImage3";
        }else{
            $input['prokolpo_list'] = "";
        }

        if (!empty($document4 = $request->file('prokolpo_exel')) && $request->hasFile('prokolpo_exel')) {
            $destinationPath = 'image/';
            $documentImage4 = date('YmdHis') . "." . $document4->getClientOriginalExtension();
            $document4->move($destinationPath, $documentImage4);
            $input['prokolpo_exel'] = "$documentImage4";
        }else{
            $input['prokolpo_exel'] = "";
        }

        Project::create($input);

        return redirect()->route('project.index')
                        ->with('message','প্রকল্প সংযোগ হয়েছে');

    }

    public function import(Request $request){
        // dd($request);
        Excel::import(new ProjectImport,request()->file('prokolpo_exel'));

        return back();
    }

    //

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    public function getDataById($id){
        $project = Project::find($id);
        return response([
            'data' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $project = Project::find($id);
        $project->prokolpo_no = $request->prokolpo_no;
        $project->prokolpo_name = $request->prokolpo_name;
        $project->amount = $request->amount;
        $project->save();
        return response()->json([
            'error' => false,
            'data' => $project
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->back()->with('message','প্রকল্প ডিলিট হয়েছে ');
    }

    public function delete($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->back()->with('message','প্রকল্প ডিলিট হয়েছে ');
    }

    public function deleteAllSelectedRecords(Request $request)
    {
        $ids = $request->ids;
        
        Project::whereIn('id',explode(',',$ids))->update(['deskpass'=>'Passed']); 
        return redirect()->back()->with('message','প্রকল্প ডিলিট হয়েছে ');
        
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

    public function deskpassAdd(Request $request,$id)
    {

        $project = Project::findOrFail($id);
        $project->application = $request->input('application_no');
        $project->application_date = $request->input('application_date');
        $project->save($request->all());
        return redirect()->back()->with('message','প্রকল্প update হয়েছে ');
       

    }


}

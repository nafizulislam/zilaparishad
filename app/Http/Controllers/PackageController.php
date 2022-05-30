<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\Sarok;
use App\Models\Project;
use App\Models\BundlePackage;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $sarok = Sarok::get();
        // $project = Project::orderBy('id','desc')->get();

        $project = Project::join('saroks','projects.minister_number','saroks.id')
                            ->select('saroks.*','projects.*')
                            ->where('projects.packages',0)
                            ->get();

        return view('Projects.package',['project' => $project]);
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

        $package = new Package();
        $package->package_code  = $request->package_code;
        $package->tender_id  = $request->tender_id;
        $package->app_id  = $request->app_id;
        $package->save();
        $packageId = $package->id;


        // Create bundle-Products
        if (isset($request->projectId)) {
            foreach ($request->projectId as $idx => $pid ) {
                $bp = new BundlePackage();
                $bp->package_id = $packageId;
                $bp->project_id = $pid;
                $bp->save();
                $project_update = Project::find($pid);
                $project_update->packages = 1;
                $project_update->save();
            }

        }

        return redirect()->route('package.index')->with('message','প্যাকেজ সংযোগ হয়েছে ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }

    public function delete($id){
        $package = Package::find($id);
        $package->delete();
        return redirect()->back()->with('message','প্যাকেজ ডিলিট হয়েছে ');
    }
}

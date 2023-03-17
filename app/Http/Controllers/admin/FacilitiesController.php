<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacilitiesAddRequest;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.facilities_layout.add_new_facilities');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function facilitiesList()
    {
        $allPosts = Facilities::all();
        return view('admin.facilities_layout.facilities_list',compact('allPosts'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacilitiesAddRequest $request)
    {
        $facilities_add= Facilities::create([

            'name'=>$request->get('name')
        ]);
        if ($facilities_add){
            return redirect()->back()->with('success','facilities added successfully');
        }else{
            return Redirect::back()->with('fail','facilities added failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edtFacilities = Facilities::findorfail($id);
        return view('admin.facilities_layout.edit_facilities',compact('edtFacilities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $updateFacilities = Facilities::where('id',$request->id)->update([
            'name'=>$request->get('name')
        ]);
        return redirect()->route('facilities.list.page')->with('success','Facilities has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        dd($id);
        $dltfacilities = Facilities::findorfail($id);
        $dltfacilities = $dltfacilities->delete();
        if ($dltfacilities){
            return redirect()->route('facilities.list.page')->with('success','Delete Successfully');
        }else{
            return redirect()->back()->with('fail','Delete failed');
        }
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyMissionRequest;
use App\Models\CompanyMission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminCompanyMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin_company_mission.admin_company_mission_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function listShow()
    {
        $company_mission_list = CompanyMission::all();
        return view('admin.admin_company_mission.admin_company_mission_show_list',compact('company_mission_list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyMissionRequest $request)
    {
        if ($request->hasFile('image')) {
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/company_mission-images/'.$name,file_get_contents($request->file('image')));
        }
        $company_mission_store = CompanyMission::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'image'=> ($name)
        ]);
        if ($company_mission_store){
            return redirect()->route('admin-company-mission.index')->with('success','Our company mission added successfully');
        }else{
            return Redirect::back()->with('fail','Our service added failed');
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
        $editCompanyList = CompanyMission::findorfail($id);
        return view('admin.admin_company_mission.admin_company_edit_page',compact('editCompanyList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $upload_image = Storage::put('/public/company_mission-images/'.$name,file_get_contents($request->file('image')));
            if ($upload_image){
                $data['image'] = $name;
            }
        }

        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $updateStaff = CompanyMission::where('id',$request->id)->update($data);
        return redirect()->route('admin-company-mission.index')->with('success','Our company mission has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dltCompanyMission = CompanyMission::findorfail($id);
        $dltCompanyMission = $dltCompanyMission->delete();

        if ($dltCompanyMission){
            return redirect()->route('admin-company-mission.index')->with('success','companyMission list deleted successfully');
        }else{
            return Redirect::back()->with('fail','companyMission lit not deleted');
        }
    }
}

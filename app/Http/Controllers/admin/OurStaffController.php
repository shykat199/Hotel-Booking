<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffAddRequest;
use App\Models\OurStaffs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class OurStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.our_staff.add_staff');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function stafflist()
    {
        $staff_list = OurStaffs::all();
        return view('admin.our_staff.staff_list',compact('staff_list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffAddRequest $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/staff-images/'.$name,file_get_contents($request->file('image')));
        }

        $staff_store = OurStaffs::create([
            'name' => $request->get('name'),
            'designation' => $request->get('designation'),
            'image' => ($name)
        ]);
        if ($staff_store) {
            return redirect()->route('view.addStaff.page')->with('success', 'Staff added Successfully');
        } else {
            // return Redirect::back()->with('Error','User not able to Register');
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
        $edtStaff = OurStaffs::findorfail($id);
        return view('admin.our_staff.staff_edit_page',compact('edtStaff'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $upload_image = Storage::put('/public/staff-images/'.$name,file_get_contents($request->file('image')));
            if ($upload_image){
                $data['image'] = $name;
            }
        }

        $data['name'] = $request->get('name');
        $data['designation'] = $request->get('designation');
        $updateStaff = OurStaffs::where('id',$request->id)->update($data);
        return redirect()->route('staff.list.page')->with('success','staff has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dltstaff = OurStaffs::findorfail($id);
        $dltstaff = $dltstaff->delete();
        if ($dltstaff){
            return redirect()->route('staff.list.page')->with('success','staff deleted successfully');
        }else{
            return Redirect::back()->with('fail','staff not deleted');
        }
    }
}

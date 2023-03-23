<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OurServiceRequest;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class OurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.our_service.our_service_page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurServiceRequest $request)
    {
        if ($request->hasFile('image')) {
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/service-images/'.$name,file_get_contents($request->file('image')));
        }
        $service_store = Services::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'image'=> ($name)
        ]);
        if ($service_store){
            return redirect()->route('admin.service.add.page.show')->with('success','Our service added successfully');
        }else{
            return Redirect::back()->with('fail','Our service added failed');
        }

    }

    /**
     * Display the specified resource.
     */
    public function ourServiceList(){
        $ourService_list = Services::all();
        return view('admin.our_service.our_service_list_page',compact('ourService_list'));
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editServiceList = Services::findorfail($id);
        return view('admin.our_service.service_list_edit',compact('editServiceList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $upload_image = Storage::put('/public/service-images/'.$name,file_get_contents($request->file('image')));
            if ($upload_image){
                $data['image'] = $name;
            }
        }

        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $updateStaff = Services::where('id',$request->id)->update($data);
        return redirect()->route('admin.service.list.show.page')->with('success','Our service has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dltOurService = Services::findorfail($id);
        $dltOurService = $dltOurService->delete();

        if ($dltOurService){
            return redirect()->route('admin.service.list.show.page')->with('success','service list deleted successfully');
        }else{
            return Redirect::back()->with('fail','service lit not deleted');
        }
    }
}

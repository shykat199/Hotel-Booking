<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureAddRequest;
use App\Models\Features;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FeatureListController extends Controller
{
    public function index(){
        return view('admin.feature_layout.add_new_features');
    }

    /**
     * Display a listing of the resource.
     */
    public function featureList()
    {
        $allPosts = Features::all();
        return view('admin.feature_layout.feature_list',compact('allPosts'));
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
    public function store(FeatureAddRequest $request)
    {
        $feature_add= Features::create([

            'name'=>$request->get('name')
        ]);
        if ($feature_add){
            return redirect()->back()->with('success','feature added successfully');
        }else{
            return Redirect::back()->with('fail','feature added failed');
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
        $edtPost = Features::findorfail($id);
        return view('admin.feature_layout.feature_edit', compact('edtPost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $updatefeature = Features::where('id', $request->id)->update([
            'name'=>$request->get('name')
        ]);

        return redirect()->route('feature.list.page')->with('success','Feature has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dltPost = Features::findorfail($id);
        $dltPost = $dltPost->delete();
        if ($dltPost){
            return redirect()->back()->with('success','Feature Deleted Successfully');
        }
        else{
            return redirect()->back()->with('error','Post Not Deleted');
        }
    }
}

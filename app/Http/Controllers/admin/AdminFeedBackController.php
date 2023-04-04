<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminFeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.feed_back.add_feed_back');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function listShow()
    {
        $feedBackList = Feedback::all();
        return view('admin.feed_back.admin_feedback_list_show',compact('feedBackList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/feed_back-images/'.$name,file_get_contents($request->file('image')));
        }
        $feedback_store = Feedback::create([
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'image'=> ($name)
        ]);
        if ($feedback_store){
            return redirect()->route('admin-feed-back.index.page')->with('success','Feedback added successfully');
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
        $feedbackEdit = Feedback::findorfail($id);
        return view('admin.admin_feedback_edit_page',compact('feedbackEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $upload_image = Storage::put('/public/feed_back-images/'.$name,file_get_contents($request->file('image')));
            if ($upload_image){
                $data['image'] = $name;
            }
        }

        $data['name'] = $request->get('name');
        $data['description'] = $request->get('description');
        $updateFeedback = Feedback::where('id',$request->id)->update($data);
        return redirect()->route('admin-feed-back.list-show.page')->with('success','Feedback list has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedback = Feedback::findorfail($id);
        $feedback = $feedback->delete();

        if ($feedback){
            return redirect()->route('admin-feed-back.list-show.page')->with('success','feedback list deleted successfully');
        }else{
            return Redirect::back()->with('fail','feedback lit not deleted');
        }
    }
}

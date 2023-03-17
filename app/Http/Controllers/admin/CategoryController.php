<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.add_category_input_page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function listShowCategory()
    {
        $ctgryList = Categorie::all();
        return view('admin.category.list_show_category',compact('ctgryList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/room_category-images/'.$name,file_get_contents($request->file('image')));
        }

        $category_store = Categorie::create([
            'name' => $request->get('name'),
            'image' => ($name)
        ]);
        if ($category_store) {
            return redirect()->route('category.room.input')->with('success', 'Staff added Successfully');
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
        $edtCategory = Categorie::findorfail($id);
        return view('admin.category.category_edit_page',compact('edtCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $upload_image = Storage::put('/public/room_category-images/'.$name,file_get_contents($request->file('image')));
             if ($upload_image){
                 $data['image'] = $name;
             }
        }



        $data['name'] = $request->get('name');
        $updateRoom_categoryList = Categorie::where('id',$request->id)->update($data);
        return redirect()->route('category.room.list')->with('success','Room_category list has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dltcategory = Categorie::findorfail($id);
        $dltcategory = $dltcategory->delete();
        if ($dltcategory){
            return redirect()->route('category.room.list')->with('success','category deleted successfully');
        }else{
            return Redirect::back()->with('fail','category not deleted');
        }
    }
}

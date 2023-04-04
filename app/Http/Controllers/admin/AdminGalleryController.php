<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin_gallery.admin_gallery_page');
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
    public function store(AdminGalleryRequest $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/gallery-images/'.$name,file_get_contents($request->file('image')));
        }

        $gallery = Gallery::create([
            'image' => ($name)
        ]);
        if ($gallery) {
            return redirect()->route('admin.gallery.page')->with('success', 'gallery pic added Successfully');
        } else {
             return Redirect::back()->with('Error','User not able to added pic');
        }
    }

    /**
     * Display the specified resource.
     */

}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSliderRequest;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $sliders = Sliders::all();
        return view('admin.slider_page.slider_add_page');
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
    public function store(AdminSliderRequest $request)
    {
//        dd(1);
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/slider-images/'.$name,file_get_contents($request->file('image')));
        }

        $slider_store = Sliders::create([

            'title_1' => $request->get('title_1'),
            'title_2' => $request->get('title_2'),
            'title_3' => $request->get('title_3'),
            'image' => ($name)
        ]);

        if ($slider_store) {
            return redirect()->route('admin-slider.index')->with('success', 'slider added Successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

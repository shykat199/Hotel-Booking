<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAboutUsRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutUsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.about_us_admin_page.about_us_admin_page');
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
    public function store(AdminAboutUsRequest $request)
    {
        $about = About::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),

        ]);
        if ($about) {
            return redirect()->route('about-us-admin.index')->with('success', ' about added Successfully');
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

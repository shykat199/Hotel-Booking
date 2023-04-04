<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminBlogRequest;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\NoReturn;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin_blog.add_blog_page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function viewList()
    {
        $allPosts = Blogs::all();
        return view('admin.admin_blog.view_admin_blog_list',compact('allPosts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    #[NoReturn] public function store(AdminBlogRequest $request)
    {

          // dd($request->all());
        if ($request->hasFile('image')) {
            // dd(1);
            // $image = $request->file('image');
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/blog-images/' . $name, file_get_contents($request->file('image')));
        }
//         dd(Auth::id());
        $user_post_store = Blogs::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => ($name)
        ]);
        if ($user_post_store) {
            return redirect()->route('admin.blog.add.page')->with('success', ' Blog added Successfully');
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
        $edtPost = Blogs::findOrFail($id);
        return view('admin.admin_blog.admin_blog_edit', compact('edtPost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $updateBlog = Blogs::where('id', $request->id)->update([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'image'=>$request->get('image'),

        ]);

        return redirect()->route('admin.show.blog.list')->with('success','list has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dlePost = Blogs::findOrFail($id);
//        dd($dlePost);
//        $image = $dlePost->image;
//        dd('public/storage/post-images/'.$dlePost->image);
        Storage::delete('public/blog-images/'.$dlePost->image);
        $dlePost=  $dlePost->delete();
        if ($dlePost){
            return redirect()->back()->with('success','Post Deleted Successfully');
        }else
        {
            return redirect()->back()->with('error','Post Not Deleted');
        }
    }
}

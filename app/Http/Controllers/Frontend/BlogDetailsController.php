<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Categorie;

class BlogDetailsController extends Controller
{
    public function blogDetailsFunction (string $id) {

        $blogDetails = Blogs::find($id);
        $roomCtgries = Categorie::all();
//        $roomGrid =
        return view('frontend.blog_details',compact('blogDetails','roomCtgries'));
    }


}

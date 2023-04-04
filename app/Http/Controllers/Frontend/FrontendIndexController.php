<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Services;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */




    public function index()
    {
        $ourService = Services::all();
        $sliders = Sliders::all();
        $aboutUs=About::all();
        $gallery = Gallery::limit(5)->orderBy('id', 'DESC')->get()->toArray();
//        dd($gallery[1]);

//        $gallery = DB::table('galleries')->paginate(2);
        return view('frontend.index_page',compact('ourService','sliders','aboutUs','gallery'));
    }





}

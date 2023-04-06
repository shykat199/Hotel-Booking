<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSettingRequest;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index(){

        $data['settings'] = Settings::pluck('value', 'name' )->toArray();
       // dd($data);
        return view('admin.setting.setting_page',$data);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $data = $request->except(['_method', '_token']);

        //dd($data);
        foreach($data as $key => $value) {

            if ($key === 'logo') {

                if ($request->hasFile('logo')) {
                    $logo = Settings::where('name', '=', 'logo')->pluck('value');
                    //dd($logo);
                    Storage::delete('/public/logo/' . $logo[0]);
                    $name = time() . '.' . $request->file('logo')->getClientOriginalExtension();
                    $image = Storage::put('/public/logo/' . $name, file_get_contents($request->file('logo')));
                    $createSetting = Settings::updateOrCreate([
                        'name' => $key,
                    ], [
                        'value' => $name,
                    ]);
                }
            }
                else{
                    $createSetting = Settings::updateOrCreate(['name' => $key], ['value' => $value]);
                }


        }
//        dd($createSetting);
        return to_route('setting.index.page')->with('success','Data Entry Successfully done');
    }
}

<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Traits\AttachFilesTrait;
use App\Models\Setting;
use Illuminate\Http\Request;
use mysql_xdevapi\Collection;

class SettingController extends Controller
{
    use AttachFilesTrait;
    public function index(){
        $collection =Setting::all() ;
        $setting = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value ];
        });
        return view('pages.setting.index',compact('setting')) ;

    }

    public function update(Request $request){

        try{
            $info = $request->except('_token', '_method', 'logo');
            foreach ($info as $key=> $value){
                Setting::where('key', $key)->update(['value' => $value]);
            }

//            $key = array_keys($info);
//            $value = array_values($info);
//            for($i =0; $i<count($info);$i++){
//                Setting::where('key', $key[$i])->update(['value' => $value[$i]]);
//            }

            if($request->hasFile('logo')) {
                $file_name =  Setting::where('key','logo')->first()->value;

                $this->deleteFile($file_name,'logo');
                $logo_name = $request->file('logo')->getClientOriginalName();
                Setting::where('key', 'logo')->update(['value' => $logo_name]);
                $this->uploadFile($request,'logo','logo');
            }

            toastr()->success(trans('messages.Update'));
            return back();
        }
        catch (\Exception $e){

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }
}

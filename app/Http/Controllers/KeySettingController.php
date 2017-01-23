<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KeySetting;
use App\Http\Requests;
use Auth;

class KeySettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $key_settings = KeySetting::all();
        $report_title = "KeySetting Information";
        return view('keysettings.list_keysettings', compact('key_settings'),['report_title'=>$report_title]);
    }
    
    public function add_key_settings(Request $request){
        
        if($request->get('course_edit_id')){
            $key_settings =  KeySetting::find($request->get('course_edit_id'));
        }else{
            $key_settings = new KeySetting();
        }
        $key_settings->infusionsoft_app = $request->get('infusionsoft_app');
        $key_settings->infusionsoft_api_key  = $request->get('infusionsoft_api_key');
        //$key_settings->credit_hours  = $request->get('credit_hours');
        //$key_settings->status    = $request->get('status');
        
        //$department->entered_id = Auth::user()->id;
        //later needs to be fix when we have hod roles
        //$department->hod_id   = Auth::user()->id;
        $key_settings->save();
        return redirect('key_settings?success=1&message=Key was successfully updated!')->withInput() ;
        //$request->session()->flash('flash_message', 'Course was successful added!');
        
        //return back();
    }
    public function remove_key_settings(Request $request){
         KeySetting::destroy($request->course_id);
         //$request->session()->flash('flash_message', 'Course was successful removed!');
         return redirect('key_settings?success=1&message=Key Setting was successfully removed!')->withInput() ;
        //return back();
    }
    public function key_settings_in_json(Request $request){
        return KeySetting::find($request->id)->toJson();
    }
    public function all_courses_in_json(){
        return KeySetting::where("status","=","Active")->get()->toJson();
    }
}
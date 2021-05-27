<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exercise;
use DB;

class ExerciseController extends Controller
{

  
    public function index(){

    $exercise = DB::table('exercise')->get();

    return view('exercise.index', compact('exercise'));
}

public function create(){
    return view('exercise.create');
}


public function Store(Request $request){
    $data = array();
    $data['exercise_name'] = $request->exercise_name;
    $data['exercise_details'] = $request->exercise_details;
    $data['exercise_type'] = $request->exercise_type;
    $data['exercise_steps'] = $request->exercise_steps;


    $image = $request->file('EPhoto');
    if($image){
        $image_name = date('dmy_H_s_i');
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'public/media1/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path,$image_full_name);
        $data['EPhoto'] = $image_url;
        $exercise = DB::table('exercise')->insert($data);
        return redirect()->route('exercise.index')
                        ->with('success','Created Successfully');
    }

}




    //
}

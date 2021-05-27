<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userPro;
use DB;


class userProController extends Controller
{
    
    public function index(){

    $userPro = DB::table('maindetails')->get();



    return view('userPro.index', compact('userPro'));
}


 public function index1(){

    $userPro = DB::table('maindetails')->get();

    return view('userPro.profile', compact('userPro'));

}

public function create(){
    return view('userPro.create');
}


public function Store(Request $request){
    $data = array();
    $data['first_name'] = $request->first_name;
    $data['last_name'] = $request->last_name;
    $data['age'] = $request->age;
    $data['email'] = $request->email;
    $data['address'] = $request->address;
    $data['contact_number'] = $request->contact_number;
    $data['body_height'] = $request->body_height;
    $data['body_weight'] = $request->body_weight;
    $data['join_date'] = $request->join_date;
    $data['user_type'] = $request->body_height*$request->body_weight;


    $image = $request->file('photo');
    if($image){
        $image_name = date('dmy_H_s_i');
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'public/media/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path,$image_full_name);
        $data['photo'] = $image_url;
        $userPro = DB::table('maindetails')->insert($data);
        return redirect()->route('userPro.index')
                        ->with('success','Profile Created Successfully');
    }

}

public function Edit($id){
    $userPro = DB::table('maindetails')->where('id',$id)->first();
    return view('userPro.edit',compact('userPro'));
}

public function Update(Request $request, $id){
    $oldlogo = $request->old_logo;
    $data = array();
    $data['first_name'] = $request->first_name;
    $data['last_name'] = $request->last_name;
    $data['age'] = $request->age;
    $data['email'] = $request->email;
    $data['address'] = $request->address;
    $data['contact_number'] = $request->contact_number;
    $data['body_height'] = $request->body_height;
    $data['body_weight'] = $request->body_weight;
    $data['join_date'] = $request->join_date;
    $data['user_type'] = $request->user_type;
    
    $image = $request->file('photo');
    if($image){
        unlink($oldlogo);
        $image_name = date('dmy_H_s_i');
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'public/media/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path,$image_full_name);
        $data['photo'] = $image_url;
        $userPro = DB::table('maindetails')->where('id',$id)->update($data);
        return redirect()->route('userPro.index')
                        ->with('success',' Updated Successfully');
    }

}






}

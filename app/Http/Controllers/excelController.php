<?php

namespace App\Http\Controllers;
use App\Models\Querry;
use Illuminate\Http\Request;
use App\Imports\excelImport;
use App\Mail\mailsend;
use App\Imports\usersImport;
use Excel;
use DB;
Use Mail;
class excelController extends Controller
{
  public function import(Request $req){
    //import
    //validate
   // echo"<pre>";print_r($_FILES);die;
    Excel::import (new excelImport,$req->file('myfile') );
  }

 ////////////////////////////////////////////project////////////////////////////////////
public function coll(){
  return view('project.home');
}
public function enter(Request $req){

   Excel::import(new usersImport,$req->file('file'));
  return redirect()->back()->with('message', 'Data has Been Imported Successfully');
  
}
public function insert(Request $request){
  //echo"<pre>";print_r($_POST);die;
  $model= new Querry;
  $model->first_name=$request->first_name;
  $model->last_name=$request->last_name;
  $model->email=$request->email;
  $model->phone=$request->phone;
  $model->city=$request->city;
  $model->state=$request->state;
  $model->address=$request->address;
  $model->pincode=$request->pincode;
 $model->secondery_contact_details=$request->spersonal_name.','.$request->personal_email.','.$request->number.','. $request->relationship;
  $model->save();
  return redirect()->back()->with('message', 'Data has Been submited Successfully');
}
public function fetch(Request $request){

   $data= DB::table('theam_project')->get();
   return view ('project.fetch',['data'=>$data]);
  
}
//////////////////mail controller//////////////
public function emaillogin(){
  return view('auth.emaillog');
  
} 

}
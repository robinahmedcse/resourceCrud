<?php

namespace App\Http\Controllers;
 
use App\District;
use App\Upazila;



use Illuminate\Http\Request;

class AjaxCallController extends Controller
{
   
    
    public function getDistrict(Request $request) {
   //     return   $request->all();
     $division_id  =$request->division;
        
$districts = District::where('division_id', $division_id)
                  ->get();
 
       foreach ($districts as  $district) {
            echo '<option value="'.$district->id .'">' . $district->district_name .'</option>';
       }
 
    
  

        //getDistrict
    }
    
    
    
    
    
    
    
    
        public function getupazila(Request $request) {
    //return   $request->all();
  $district_id  =$request->district;
 
  
  $upazilas=  Upazila::where('district_id',$district_id)
                 ->get();
  
 
       foreach ($upazilas as  $upazila) {
            echo '<option value="'.$upazila->id .'">' . $upazila->upazila_name .'</option>';
       }
 
    
  

        //getDistrict
    }
    
    
    
    
    
    
    
    
    //AjaxCallController
}

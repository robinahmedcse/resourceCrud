<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

use DataTables;
use Validator;
 



class AjaxdataController extends Controller
{
    
public function index( ) {
 
//ajaxdata blade name

  return view('division.showDivisionDataTable');



}


public function getdata() {
     $divisions = Division::select('id', 'division_name');
     return Datatables::of($divisions)
            ->addColumn('Action', function($divisions){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$divisions->id.'"> Edit</a> | '
                        . '<a href="#" class="btn btn-xs btn-danger delete" id="'.$divisions->id.'">Delete</a>';
            })
                        
           ->addColumn('checkbox', '<input type="checkbox" name="division_checkbox[]" class="division_checkbox" value="{{$id}}" />')
              ->rawColumns(['checkbox','Action'])
       
            ->make(true);
            
            
   
}
    
    

public function postdata(Request $request) {
    
//return $request->all();
    
/*    
 $validation =   $this->validate($request, [
   
    ]);
  */
    
      $validation = Validator::make($request->all(), [
              'division_name' => 'required|string|min:3|max:30',
        
        ]);
      
      
      
    
    $error_array = array();
     $success_output = '';
    
     
     if($validation->fails()){
          foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
     }else{
         
                    if($request->get('button_action') == "insert"){
                                Division::create([
                                    'division_name' => $request->division_name,
                                ]);

                                  $success_output = '<div class="alert alert-success">Data Inserted</div>';
                }
                
                
                
                
            if($request->get('button_action') == 'update')
            {
                $division = Division::find($request->get('division_id'));
                $division->division_name = $request->get('division_name');
      
                $division->save();
                $success_output = '<div class="alert alert-success">Data Updated</div>';
            }
            
  
          
        //end of main else             
     }
     
     
     
          $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    
    
  //postdata  
}





public function fetchdata(Request $request) {
    $id= $request->input('id_value');
    //return $id;
    
    $division=  Division::find($id);
    
      $output = array(
            'division_name'     =>  $division->division_name,
         
        );
      
       echo json_encode($output);
    
}






public function removedata(Request $request) {
      $id= $request->input('id_value');
    //return $id;    
     $division = Division::find($id);
        if ($division->delete()) {
                   echo 'Data Deleted';
        }
    }
 
 

    
    
    public function massremove(Request $request) {
        $division_id_array = $request->input('id');
        
    //    return $student_id_array ;
        
        
         $division = Division::whereIn('id', $division_id_array);
        if($division->delete())
        {
            echo 'Data Deleted';
        }
    }






///AjaxdataController       
}

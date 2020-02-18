<?php

namespace App\Http\Controllers;

use App\Upazila;
use App\District;

use DB;

use Illuminate\Http\Request;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         //    $districts= District::latest()->paginate(3);
                
                
                $upazilas = DB::table('upazilas')
                                    ->join('districts', 'upazilas.district_id', '=', 'districts.id')
                                    ->select('upazilas.*', 'districts.district_name')
                                    ->paginate(3);
 
//        echo '<pre>';
//        print_r($upazilas);
//        dd();



        return view('upazila.showAllupazila',  compact('upazilas'))
                ->with('i',(request()->input('page',1)-1)*3);
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               $districts = District::all();
        return view('upazila.createUpazila',compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //  return    $request->all();
       
       request()->validate([
             'upazila_name' => 'required|string|min:3|max:50', 
             'district_id' => 'required', 
           
       ]);
       
       
               if($request->district_id == 0){
                return redirect()->route('upazila.create')->with('success','Please select District');
          }else{
              
              Upazila::create([
                'upazila_name'=> $request->upazila_name,
                'district_id' => $request->district_id,
        ]);
              
               return redirect()->route('upazila.index')->with('success','Upazila Created Successfully');
          }
          
       
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upazila  $upazila
     * @return \Illuminate\Http\Response
     */
    public function show(Upazila $upazila)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upazila  $upazila
     * @return \Illuminate\Http\Response
     */
    public function edit(Upazila $upazila)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upazila  $upazila
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upazila $upazila)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upazila  $upazila
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upazila $upazila)
    {
        //
    }
}

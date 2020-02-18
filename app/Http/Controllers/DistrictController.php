<?php

namespace App\Http\Controllers;

use App\District;
use App\Division;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //    $districts= District::latest()->paginate(3);
                
                
                $districts = DB::table('districts')
                                    ->join('divisions', 'districts.division_id', '=', 'divisions.id')
                                    ->select('districts.*', 'divisions.division_name')
                                    ->paginate(3);
 
//        echo '<pre>';
//        print_r($districts);
//        dd();



        return view('District.showAllDistrict',  compact('districts'))->
                        with('i',(request()->input('page',1)-1)*3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $divisions = Division::all();
        return view('district.createDistrict',compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // return  $request->all();
          
          request()->validate([
              'division_id'=>'required',
              'district_name' => 'required|string|min:2|max:20',
          ]);
          
          if($request->division_id == 0){
                return redirect()->route('district.create')->with('success','Please select Division');
          }else{
              
              District::create([
               'division_id' => $request->division_id,
                'district_name'=> $request->district_name,
        ]);
              
               return redirect()->route('district.index')->with('success','District Created Successfully');
          }
          
          
          
          
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
              return view('district.showSingledistrict',  compact('district'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        //$division_id= $district->division_id;
        
        
          $divisions= Division::all();
        
           return view('district.editDistrict')
                            ->with('district',$district)
                            ->with('divisions',$divisions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        
              $district->delete();
            return redirect()->route('district.index')
                ->with('success', 'Your District Deleted');
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $divisions= Division::latest()->paginate(3);
        
        return view('division.showAllDivision',  compact('divisions'))->
                        with('i',(request()->input('page',1)-1)*3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('division.createDivision');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
  //  return  $request->all();
        
//        $this->validate($request, [
//       
//                 'Dname' => 'required|string|min:1|max:10',
//        ]);
 
        
            request()->validate([
                 'Dname' => 'required|string|min:4|max:20',
        ]);
            
        Division::create([
               'division_name' => $request->Dname,
        ]);
        
        
        return redirect()->route('division.index')->with('success','Division Created Successfully');
            
            
            
            
            
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(division $division)
    {
          return view('division.showSingleDivision',  compact('division'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(division $division)
    {
        return view('division.editDivision',  compact('division'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, division $division)
    {
     
      // return $request->all();
              request()->validate([
                 'Dname' => 'required|string|min:4|max:20',
        ]);
        
         // $division->update($request->all());
   
       $division->division_name=$request->Dname;
       $division->save();
   
   
        return redirect()->route('division.index')
                ->with('success', 'Division Name updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(division $division)
    {
          $division->delete();
            return redirect()->route('division.index')
                ->with('success', 'Your Division Deleted');
    }
}

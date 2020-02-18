@extends('layouts.app')

@section('content')
<div class="container">
 
    <div class="">
        <div class="">
            <div class="">
                
            </div>
        </div>
    </div>
    
    
       <div class="row">
        <div class="col-lg-12 ">
            <h3 class="text-center"> District Name</h3>
        </div>
    </div>
    
      <div class="row">
        <div class="col-sm-12 ">
            <div class="col-sm-4 offset-sm-8">
                     <a class="btn btn-xs btn-dark" href="{{ route('district.index') }}">District List</a> 
                <a class="btn btn-xs btn-success" href="{{ route('district.create') }}">Create New District</a>
            </div>
        </div>
    </div>
    
 
      <div class="table-responsive mt-5">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
  
              
                </tr>
            </thead>
            <tbody>
          
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $district->district_name }}</td>
  
          
                </tr>
 
            </tbody>
        </table>
 
    </div>
 
    
    
    

    
    
    

    

    
    
</div>
@endsection

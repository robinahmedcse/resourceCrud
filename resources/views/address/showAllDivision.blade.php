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
            <h3 class="text-center">All Division List</h3>
        </div>
    </div>
    
      <div class="row">
        <div class="col-sm-12 ">
            <div class="col-sm-2 offset-sm-10">
                <a class="btn btn-xs btn-success" href="{{ route('division.create') }}">Create New Division</a>
            </div>
        </div>
    </div>
    
    
    @if($message = Session::get('success'))
    <div class="alert alert-danger mt-3" role="alert">
        <p class="text-exception text-center">{{ $message }}</p>
    </div>
    @endif
    
    
    
    @if (count($divisions) <= 0)
   <div class="alert alert-warning mt-3" role="alert">
        <p class="text-exception text-center">  No data found—check it out! </p>
    </div>
@else
      <div class="table-responsive mt-3">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
              
                </tr>
            </thead>
            <tbody>
                @foreach($divisions as $division)
                <tr>
                    <th scope="row">{{ ++$i}}</th>
                    <td>{{ $division->division_name }}</td>
                    <td>
                        
                              <a href="{{route('division.show',$division->id)}}" class="btn btn-sm btn-outline-info">Show</a>
                    
                                 <a href="{{route('division.edit',$division->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>

                                 <form method="post" class="form-delete" action="{{route('division.destroy',$division->id)}}" style="display: inline;">
                                 @method('DELETE')
                                 @csrf
                                 <button onclick="return confirm('Are You Sure??')" class="btn btn-sm btn-outline-secondary" 
                                         type="submit">Delete
                                 </button>
                             </form>
                        
                        
                    </td>
          
                </tr>
           @endforeach
            </tbody>
        </table>
   {{ $divisions->links() }}
    </div>
@endif
    
    
    

    
    
    

    

    
    
</div>
@endsection

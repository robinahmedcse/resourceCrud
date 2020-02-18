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
            <h3 class="text-center">Add New District</h3>
        </div>
    </div>
    
      <div class="row">
        <div class="col-sm-12 ">
            <div class="col-sm-2 offset-sm-10">
                <a class="btn btn-xs btn-success" href="{{ route('district.index') }}"> Go Back To District</a>
            </div>
        </div>
    </div>
    
    
    @if (count($errors) > 0)
    <div class="alert alert-danger mt-3" role="alert">
        <strong> </strong>There were some problem in your input
        <ul>              
        @foreach($errors->all()  as $error)
        <li>{{ $error  }}</li>

        @endforeach
      </ul>
    </div>
    @endif
    
    
    
    
    @if($message = Session::get('success'))
    <div class="alert alert-danger mt-3" role="alert">
        <p class="text-exception text-center">{{ $message }}</p>
    </div>
    @endif
    

    
    
    
    <div class="row mt-3">
        <div class="col-md-12">
            <form method="post" class="form-control" action="{{route('district.store')}}">
                @csrf
                
                
         <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Division Name</label>

                    <div class="col-md-8">
                        <select class="form-control {{ $errors->has('division_id') ? ' is-invalid' : '' }} "    name="division_id">
                            <option value="0 disabled selected" >-----------Select--------------</option>
                            @foreach($divisions as $division)
                            <option value="{{$division->id }}" >{{ $division->division_name }}</option>
                          @endforeach
                        </select>
                       

                        @if ($errors->has('division_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('division_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                
                
     
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">District Name</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control {{ $errors->has('district_name') ? ' is-invalid' : '' }}" 
                               name="district_name" value="{{ old('district_name') }}"  autofocus>

                        @if ($errors->has('district_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('district_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>


            </form>
        </div>
    </div>

    
    

    
    
    

    

    
    
</div>
@endsection

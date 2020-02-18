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
            <h3 class="text-center">Add New Upazila</h3>
        </div>
    </div>
    
      <div class="row">
        <div class="col-sm-12 ">
            <div class="col-sm-2 offset-sm-10">
                <a class="btn btn-xs btn-success" href="{{ route('upazila.index') }}"> Go Back To Upazila</a>
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
            <form method="post" class="form-control" action="{{route('upazila.store')}}">
                @csrf

                
                         <div class="form-group row">
                    <label for="district_id" class="col-md-4 col-form-label text-md-right">District Name</label>

                    <div class="col-md-8">
                        <select class="form-control {{ $errors->has('district_id') ? ' is-invalid' : '' }} "    name="district_id">
                            <option value="0 disabled selected" >-----------Select--------------</option>
                            @foreach($districts as $district)
                            <option value="{{$district->id }}" >{{ $district->district_name }}</option>
                          @endforeach
                        </select>
                       

                        @if ($errors->has('district_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('district_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                
                
                
                <div class="form-group row">
                    <label for="upazila_name" class="col-md-4 col-form-label text-md-right">Upazila Name</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control{{ $errors->has('upazila_name') ? ' is-invalid' : '' }}" 
                               name="upazila_name" value="{{ old('upazila_name') }}"  autofocus>

                        @if ($errors->has('Dname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('upazila_name') }}</strong>
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

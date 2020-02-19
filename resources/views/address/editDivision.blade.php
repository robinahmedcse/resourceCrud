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
            <h3 class="text-center">Add New Division</h3>
        </div>
    </div>
    
      <div class="row">
        <div class="col-sm-12 ">
            <div class="col-sm-2 offset-sm-10">
                <a class="btn btn-xs btn-success" href="{{ route('division.index') }}"> Go Back To Division List</a>
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
    
    
    

    <div class="row mt-3">
        <div class="col-md-12">
            <form method="post" class="form-control" action="{{route('division.update',$division->id)}}">
                @csrf
                 @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Division Name</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control{{ $errors->has('Dname') ? ' is-invalid' : '' }}" 
                               name="Dname" value="{{$division->division_name }}"  autofocus>

                        @if ($errors->has('Dname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Dname') }}</strong>
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

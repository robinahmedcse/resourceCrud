@extends('layouts.app')

@section('content')
<div class="container">
 
    
       <div class="row">
        <div class="col-lg-12 ">
            <h3 class="text-center">Add New Address</h3>
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
            <form method="post" class="form-control" action="{{route('address.store')}}">
      @csrf
                <input type="hidden" id="token_admin" name="_token" 
                       value="{{ csrf_token()}}"> 

                      <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Division Name</label>

                    <div class="col-md-8">
                        <select class="form-control {{ $errors->has('division_id') ? ' is-invalid' : '' }} "
                                id="pres-division"   name="division_id">
                            <option value="0 disabled selected" >-----------Select Division--------------</option>
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
                    <label for="district_id" class="col-md-4 col-form-label text-md-right">District Name</label>

                    <div class="col-md-8">
                        <select class="form-control {{ $errors->has('district_id') ? ' is-invalid' : '' }} "   
                                 id="district" name="district_id" >
                            <option value="0 disabled selected" >-----------Select District --------------</option>
                        </select>

                        @if ($errors->has('district_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('district_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                
                
                         <div class="form-group row">
                    <label for="upazila" class="col-md-4 col-form-label text-md-right">Upazila Name</label>

                    <div class="col-md-8">
                        <select class="form-control {{ $errors->has('upazila') ? ' is-invalid' : '' }} "  id="upazila"  name="upazila">
                          <option value="0 disabled selected" >-----------Select Upazila --------------</option>
                        </select>

                        @if ($errors->has('upazila'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('upazila') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                

                
                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Address Name</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" 
                               name="address" value="{{ old('address') }}"  autofocus>

                        @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
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

<script>
  $(function(){
     
  alert('working');
  
  
  district=$('select[name="district_id"]');
  district.attr('disabled','disabled');
 
                        upazila=$('select[name="upazila"]');
                       upazila.attr('disabled','disabled');
//    
      var dropdown = '<option selected="selected" value="">নির্বাচন করুন</option>';
      //   alert(dropdown);
 
  //   alert(token);
     //   console.log(value);
     
     
     $("#pres-division").change(function(){
                      var value = $(this).val();
//                       alert('division value is  ' +value);
                   
                     
                     $.ajax({
             
                        url:'{{URL::to("ajax/get/district/by/division/id")}}',
                        data:{
                                     division:value ,
                            
                                },
                                
                                success:function(response){
                                         district.removeAttr('disabled');
                                        $("#district").empty().append(dropdown);
                              //       console.log(response);
                                      $('#district').html(response);
                                }

                           //end of ajax  
                     });

         
         //end of division 
     });
     
       
       
       
       
       $("#district").change(function(){
   var value=$(this).val();
                      alert('district value is  ' +value);
                      
                      
                      $.ajax({
                          
                          
                          url:'ajax/get/upazila/by/district/id',
                          data:{
                                       district:value ,
                            
                          },
                          
                          success:function(response){
                                upazila.removeAttr('disabled');
                                $("#upazila").empty().append(dropdown);
                                 //       console.log(response);
                                
                             $('#upazila').html(response);
                          }
                          
                          
                          //end of ajax
                      });
                      
                      
                      
            //end of division 
       });
       
       
       
       
       
       
       

     
     
     //end of function
 })


</script>






@endsection

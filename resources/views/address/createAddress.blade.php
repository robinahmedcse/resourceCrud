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
                    <label for="name" class="col-md-2 col-form-label text-md-right" >Name:</label>
                    <div class="col-md-10">
                        <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" 
                               name="name" value="{{ old('name') }}"  autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>









                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right" >Date:</label>

                    <div class="col-md-10" >

                        <div class="col-md-4 " style="background-color: none; display: inline-block;">
                            <div class="form-group row" >
                                <label for="name" class="col-md-2 col-form-label text-md-right">Day:</label>
                                <div class="col-md-10">
                                    <select class="form-control "  name="day">
                                        <option value="0" selected disabled>নির্বাচন করুন</option>
                                        <option value="০১">০১</option>
                                        <option value="০২">০২</option>
                                        <option value="03">০৩</option>
                                        <option value="০৩">০৪</option>
                                        <option value="০৫">০৫</option>
                                        <option value="০৬">০৬</option>
                                        <option value="০৭">০৭</option>
                                        <option value="০৮">০৮</option>
                                        <option value="০৯">০৯</option>
                                        <option value="10">১০</option>
                                        <option value="১১">১১</option>
                                        <option value="১২">১২</option>
                                        <option value="১৩">১৩</option>
                                        <option value="১৪">১৪</option>
                                        <option value="১৫">১৫</option>
                                        <option value="১৬">১৬</option>
                                        <option value="১৭">১৭</option>
                                        <option value="১৮">১৮</option>
                                        <option value="১৯">১৯</option>
                                        <option value="২০">২০</option>
                                        <option value="২১">২১</option>
                                        <option value="২২">২২</option>
                                        <option value="২৩">২৩</option>
                                        <option value="২৪">২৪</option>
                                        <option value="২৫">২৫</option>
                                        <option value="২৬">২৬</option>
                                        <option value="২৭">২৭</option>
                                        <option value="২৮">২৮</option>
                                        <option value="২৯">২৯</option>
                                        <option value="৩০">৩০</option>
                                        <option value="৩১">৩১</option>

                                    </select>
                      
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 " style="background-color: none; display: inline-block;">
                            <div class="form-group row" >
                                <label for="name" class="col-md-4 col-form-label text-md-right">Month:</label>
                                <div class="col-md-8">
                                    <select class="form-control "  name="division_id">
                                         <option value="0" selected disabled>নির্বাচন করুন</option>
                                        <option value="জানুয়ারি">জানুয়ারি</option>
                                        <option value="ফেব্রুয়ারি">ফেব্রুয়ারি</option>
                                        <option value="মার্চ">মার্চ</option>
                                        <option value="এপ্রিল">এপ্রিল</option>
                                        <option value="মে">মে</option>
                                        <option value="জুন">জুন</option>
                                        <option value="জুলাই">জুলাই</option>
                                        <option value="আগস্ট">আগস্ট</option>
                                        <option value="সেপ্টেম্বর">সেপ্টেম্বর</option>
                                        <option value="অক্টোবর">অক্টোবর</option>
                                        <option value="নভেম্বর">নভেম্বর</option>
                                        <option value="ডিসেম্বর"> ডিসেম্বর</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 " style="background-color: none; display: inline-block;">
                            <div class="form-group row" >
                                <label for="name" class="col-md-3 col-form-label text-md-right">Year:</label>
                                <div class="col-md-9">
                                    <select class="form-control "  name="year">
                                    <option value="0" selected disabled> নির্বাচন করুন</option>
                                             <option value="১৯৫০">১৯৫০</option>
                                    <option value="১৯৫১">১৯৫১</option>
                                    <option value="১৯৫২">১৯৫২</option>
                                    <option value="১৯৫৩">১৯৫৩</option>
                                    <option value="১৯৫৪">১৯৫৪</option>
                                    <option value="১৯৫৫">১৯৫৫</option>
                                    <option value="১৯৫৬">১৯৫৬</option>
                                    <option value="১৯৫৭">১৯৫৭</option>
                                    <option value="১৯৫৮">১৯৫৮</option>
                                    <option value="১৯৫৯">১৯৫৯</option>
                                    
                                       <option value="১৯৬০">১৯৬০</option>
                                    <option value="১৯৬১">১৯৬১</option>
                                    <option value="১৯৬২">১৯৬২</option>
                                    <option value="১৯৬৩">১৯৬৩</option>
                                    <option value="১৯৬৪">১৯৬৪</option>
                                    <option value="১৯৬৫">১৯৬৫</option>
                                    <option value="১৯৬৬">১৯৬৬</option>
                                    <option value="১৯৬৭">১৯৬৭</option>
                                    <option value="১৯৬৮">১৯৬৮</option>
                                    <option value="১৯৬৯">১৯৬৯</option>
                                    
                                    <option value="১৯৭০">১৯৭০</option>
                                    <option value="১৯৭১">১৯৭১</option>
                                    <option value="১৯৭২">১৯৭২</option>
                                    <option value="১৯৭৩">১৯৭৩</option>
                                    <option value="১৯৭৪">১৯৭৪</option>
                                    <option value="১৯৭৫">১৯৭৫</option>
                                    <option value="১৯৭৬">১৯৭৬</option>
                                    <option value="১৯৭৭">১৯৭৭</option>
                                    <option value="১৯৭৮">১৯৭৮</option>
                                    <option value="১৯৭৯">১৯৭৯</option>

                                    <option value="১৯৮০">১৯৮০</option>
                                    <option value="১৯৮১">১৯৮১</option>
                                    <option value="১৯৮২">১৯৮২</option>
                                    <option value="১৯৮৩">১৯৮৩</option>
                                    <option value="১৯৮৪">১৯৮৪</option>
                                    <option value="১৯৮৫">১৯৮৫</option>
                                    <option value="১৯৮৬">১৯৮৬</option>
                                    <option value="১৯৮৭">১৯৮৭</option>
                                    <option value="১৯৮৮">১৯৮৮</option>
                                    <option value="১৯৮৯">১৯৮৯</option>
                                    
                                    <option value="১৯৯০">১৯৯০</option>
                                    <option value="১৯৯১">১৯৯১</option>
                                    <option value="১৯৯০">১৯৯২</option>
                                    <option value="১৯৯২">১৯৯৩</option>
                                    <option value="১৯৯৪">১৯৯৪</option>
                                    <option value="১৯৯৫">১৯৯৫</option>
                                    <option value="১৯৯৬">১৯৯৬</option>
                                    <option value="১৯৯৭">১৯৯৭</option>
                                    <option value="১৯৯৮">১৯৯৮</option>
                                    <option value="১৯৯৯">১৯৯৯</option>
                                    
                                    <option value="২০০০">২০০০</option>
                                    <option value="২০০১">২০০১</option>
                                    <option value="২০০২">২০০২</option>
                                    <option value="২০০৩">২০০৩</option>
                                    <option value="২০০৪">২০০৪</option>
                                    <option value="২০০৫">২০০৫</option>
                                    <option value="২০০৬">২০০৬</option>
                                    <option value="২০০৭">২০০৭</option>
                                    <option value="২০০৮">২০০৮</option>
                                    <option value="২০০৯">২০০৯</option>

                                    <option value="২০১০">২০১০</option>
                                    <option value="২০১১">২০১১</option>
                                    <option value="২০১২">২০১২</option>
                                    <option value="২০১৩">২০১৩</option>
                                    <option value="২০১৪">২০১৪</option>
                                    <option value="২০১৫">২০১৫</option>
                                    <option value="২০১৬">২০১৬</option>
                                    <option value="২০১৭">২০১৭</option>
                                    <option value="২০১৮">২০১৮</option>
                                    <option value="২০১৯">২০১৯</option>
                                    
                                    <option value="২০২০">২০২০</option>
                                    </select>
                             
                                </div>
                            </div>
                        </div>








                    </div>

                </div>

                
                
                
                              <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">Date</label>

                    <div class="col-md-10">

                        <div class="form-check form-check-inline">
                             <label class="form-check-label" for="day">day</label>
                                                         <select class="form-control "  name="day">
                                        <option value="0" selected disabled>নির্বাচন করুন</option>
                                        <option value="০১">০১</option>
                                        <option value="০২">০২</option>
                                        <option value="03">০৩</option>
                                        <option value="০৩">০৪</option>
                                        <option value="০৫">০৫</option>
                                        <option value="০৬">০৬</option>
                                        <option value="০৭">০৭</option>
                                        <option value="০৮">০৮</option>
                                        <option value="০৯">০৯</option>
                                        <option value="10">১০</option>
                                        <option value="১১">১১</option>
                                        <option value="১২">১২</option>
                                        <option value="১৩">১৩</option>
                                        <option value="১৪">১৪</option>
                                        <option value="১৫">১৫</option>
                                        <option value="১৬">১৬</option>
                                        <option value="১৭">১৭</option>
                                        <option value="১৮">১৮</option>
                                        <option value="১৯">১৯</option>
                                        <option value="২০">২০</option>
                                        <option value="২১">২১</option>
                                        <option value="২২">২২</option>
                                        <option value="২৩">২৩</option>
                                        <option value="২৪">২৪</option>
                                        <option value="২৫">২৫</option>
                                        <option value="২৬">২৬</option>
                                        <option value="২৭">২৭</option>
                                        <option value="২৮">২৮</option>
                                        <option value="২৯">২৯</option>
                                        <option value="৩০">৩০</option>
                                        <option value="৩১">৩১</option>

                                    </select>
                        </div>
                        <div class="form-check form-check-inline">
                               <label class="form-check-label" for="Month">Month</label>
                         <select class="form-control "  name="division_id">
                                         <option value="0" selected >নির্বাচন করুন</option>
                                        <option value="জানুয়ারি">জানুয়ারি</option>
                                        <option value="ফেব্রুয়ারি">ফেব্রুয়ারি</option>
                                        <option value="মার্চ">মার্চ</option>
                                        <option value="এপ্রিল">এপ্রিল</option>
                                        <option value="মে">মে</option>
                                        <option value="জুন">জুন</option>
                                        <option value="জুলাই">জুলাই</option>
                                        <option value="আগস্ট">আগস্ট</option>
                                        <option value="সেপ্টেম্বর">সেপ্টেম্বর</option>
                                        <option value="অক্টোবর">অক্টোবর</option>
                                        <option value="নভেম্বর">নভেম্বর</option>
                                        <option value="ডিসেম্বর"> ডিসেম্বর</option>
                                    </select>
                        </div>
                        <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="year">Year</label>
                                                <select class="form-control "  name="year">
                                    <option value="0" selected disabled> নির্বাচন করুন</option>
                                             <option value="১৯৫০">১৯৫০</option>
                                    <option value="১৯৫১">১৯৫১</option>
                                    <option value="১৯৫২">১৯৫২</option>
                                    <option value="১৯৫৩">১৯৫৩</option>
                                    <option value="১৯৫৪">১৯৫৪</option>
                                    <option value="১৯৫৫">১৯৫৫</option>
                                    <option value="১৯৫৬">১৯৫৬</option>
                                    <option value="১৯৫৭">১৯৫৭</option>
                                    <option value="১৯৫৮">১৯৫৮</option>
                                    <option value="১৯৫৯">১৯৫৯</option>
                                    
                                       <option value="১৯৬০">১৯৬০</option>
                                    <option value="১৯৬১">১৯৬১</option>
                                    <option value="১৯৬২">১৯৬২</option>
                                    <option value="১৯৬৩">১৯৬৩</option>
                                    <option value="১৯৬৪">১৯৬৪</option>
                                    <option value="১৯৬৫">১৯৬৫</option>
                                    <option value="১৯৬৬">১৯৬৬</option>
                                    <option value="১৯৬৭">১৯৬৭</option>
                                    <option value="১৯৬৮">১৯৬৮</option>
                                    <option value="১৯৬৯">১৯৬৯</option>
                                    
                                    <option value="১৯৭০">১৯৭০</option>
                                    <option value="১৯৭১">১৯৭১</option>
                                    <option value="১৯৭২">১৯৭২</option>
                                    <option value="১৯৭৩">১৯৭৩</option>
                                    <option value="১৯৭৪">১৯৭৪</option>
                                    <option value="১৯৭৫">১৯৭৫</option>
                                    <option value="১৯৭৬">১৯৭৬</option>
                                    <option value="১৯৭৭">১৯৭৭</option>
                                    <option value="১৯৭৮">১৯৭৮</option>
                                    <option value="১৯৭৯">১৯৭৯</option>

                                    <option value="১৯৮০">১৯৮০</option>
                                    <option value="১৯৮১">১৯৮১</option>
                                    <option value="১৯৮২">১৯৮২</option>
                                    <option value="১৯৮৩">১৯৮৩</option>
                                    <option value="১৯৮৪">১৯৮৪</option>
                                    <option value="১৯৮৫">১৯৮৫</option>
                                    <option value="১৯৮৬">১৯৮৬</option>
                                    <option value="১৯৮৭">১৯৮৭</option>
                                    <option value="১৯৮৮">১৯৮৮</option>
                                    <option value="১৯৮৯">১৯৮৯</option>
                                    
                                    <option value="১৯৯০">১৯৯০</option>
                                    <option value="১৯৯১">১৯৯১</option>
                                    <option value="১৯৯০">১৯৯২</option>
                                    <option value="১৯৯২">১৯৯৩</option>
                                    <option value="১৯৯৪">১৯৯৪</option>
                                    <option value="১৯৯৫">১৯৯৫</option>
                                    <option value="১৯৯৬">১৯৯৬</option>
                                    <option value="১৯৯৭">১৯৯৭</option>
                                    <option value="১৯৯৮">১৯৯৮</option>
                                    <option value="১৯৯৯">১৯৯৯</option>
                                    
                                    <option value="২০০০">২০০০</option>
                                    <option value="২০০১">২০০১</option>
                                    <option value="২০০২">২০০২</option>
                                    <option value="২০০৩">২০০৩</option>
                                    <option value="২০০৪">২০০৪</option>
                                    <option value="২০০৫">২০০৫</option>
                                    <option value="২০০৬">২০০৬</option>
                                    <option value="২০০৭">২০০৭</option>
                                    <option value="২০০৮">২০০৮</option>
                                    <option value="২০০৯">২০০৯</option>

                                    <option value="২০১০">২০১০</option>
                                    <option value="২০১১">২০১১</option>
                                    <option value="২০১২">২০১২</option>
                                    <option value="২০১৩">২০১৩</option>
                                    <option value="২০১৪">২০১৪</option>
                                    <option value="২০১৫">২০১৫</option>
                                    <option value="২০১৬">২০১৬</option>
                                    <option value="২০১৭">২০১৭</option>
                                    <option value="২০১৮">২০১৮</option>
                                    <option value="২০১৯">২০১৯</option>
                                    
                                    <option value="২০২০">২০২০</option>
                                    </select>
                        </div>
                    </div>
                </div>

                
                
                

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">Address Name</label>

                    <div class="col-md-10">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                        </div>
                    </div>
                </div>




















                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">Division Name</label>

                    <div class="col-md-10">
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
                    <label for="district_id" class="col-md-2 col-form-label text-md-right">District Name</label>

                    <div class="col-md-10">
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
                    <label for="upazila" class="col-md-2 col-form-label text-md-right">Upazila Name</label>

                    <div class="col-md-10">
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
                    <label for="name" class="col-md-2 col-form-label text-md-right">Address Name</label>

                    <div class="col-md-10">
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
    $(function () {

        alert('working');


        district = $('select[name="district_id"]');
        district.attr('disabled', 'disabled');

        upazila = $('select[name="upazila"]');
        upazila.attr('disabled', 'disabled');
//    
        var dropdown = '<option selected="selected" value="">নির্বাচন করুন</option>';
        //   alert(dropdown);
        token = $('#token_admin').val();
        //   alert(token);
        //   console.log(value);


        $("#pres-division").change(function () {
            var value = $(this).val();
//                       alert('division value is  ' +value);


            $.ajax({
                type: 'POST',
                url: '{{URL::to("ajax/get/district/by/division/id")}}',
                data: {
                    division: value,
                    _token: token
                },
                success: function (response) {
                    district.removeAttr('disabled');
                    $("#district").empty().append(dropdown);
                    //       console.log(response);
                    $('#district').html(response);
                }

                //end of ajax  
            });


            //end of division 
        });





        $("#district").change(function () {
            var value = $(this).val();
            alert('district value is  ' + value);


            $.ajax({
                type: 'POST',
                url: 'ajax/get/upazila/by/district/id',
                data: {
                    district: value,
                    _token: token
                },
                success: function (response) {
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

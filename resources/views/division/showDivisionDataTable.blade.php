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
                    <!-- Button trigger modal -->
                    <button type="button" id="add_data" name="add" class="btn btn-primary"  data-toggle="modal" data-target="#divisionModal">
                         Add Division
                    </button>
                
<!--                <a class="btn btn-xs btn-success" href="{{ route('division.create') }}">Create New Division</a>-->
            </div>
        </div>
    </div>
    
    
    @if($message = Session::get('success'))
    <div class="alert alert-danger mt-3" role="alert">
        <p class="text-exception text-center">{{ $message }}</p>
    </div>
    @endif
    
    
    



    
    
    
    
    
    
    
    
    
    
    
    
 
 
      <div class="table-responsive mt-3">
        <table  id="division_table" class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                    <th>
                        <button type="button" name="bulk_delete" id="bulk_delete" class="btn btn-danger btn-xs">
                            <i class="glyphicon glyphicon-remove">Delete</i></button>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    
    
    
    <!-- Modal -->
    <div class="modal fade" id="divisionModal" tabindex="-1" 
         role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" >
                <form method="POST" id="division_form">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Division</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         {{csrf_field()}}
                         
                        <span id="form_output"></span>
                        
                        <div class="form-group">
                            <label for="division_name">Division Name</label>
                            <input type="text" class="form-control" id="division_name" name="division_name"
                                   aria-describedby="emailHelp" placeholder="Enter Division Name">
                        
                        </div>
                    </div>
                    
                    
                    <div class="modal-footer">
                        <input type="hidden" name="division_id" id="division_id" value="" />
                        
                        <input  type="hidden" name="button_action" id="button_action"  value="insert" >
                        
                        <input  type="submit" name="Submit" value="Add" id="action" class="btn btn-info" >
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
 <script type="text/javascript">
$(document).ready(function() {
     $('#division_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('division.data') }}",
        "columns":[
            { "data": "id" },
            { "data": "division_name" },
            { "data": "Action",  orderable:false, searchable: false },
            { "data":"checkbox", orderable:false, searchable:false}
        ]
     });
});
</script>

<script>
            $('#add_data').click(function(){
             alert('dfdfdf');            
             $('#divisionModal').modal('show');
             $('#division_form')[0].reset();
             $('#form_output').html('');
             $('#button_action').val('insert');
             $('#action').val('Add');
            });
            
            
            $('#division_form').on('submit',function(event){
                    event.preventDefault();
                    var form_data =$(this).serialize();
                    
               $.ajax({
                   
                   url:"{{  route('ajaxdata.postdata')  }}",
                   method:"POST",
                   data:form_data,
                   dataType:"json",
                 success:function(data){
                       console.log(data);
                     
                     if(data.error.length>0){
                         var error_html="";
                         for( var count=0; count <data.error.length; count++){
                              error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                         }
                           $('#form_output').html(error_html);
                     }else{
                                    $('#form_output').html(data.success);
                                    $('#division_form')[0].reset();
                                    $('#action').val('Add');
                                    $('.modal-title').text('Add Division');
                                    $('#button_action').val('insert');
                                    $('#division_table').DataTable().ajax.reload();

                     }
                     
                     
                     
                     
                      ///end success  
                   }
                   ///end ajax
               })
               
            });

</script>





<script>
           $(document).on('click', '.edit', function(){
                 var id = $(this).attr("id");
                  alert(id);
         
         $.ajax({
                    url:"{{route('ajaxdata.getDataById')}}",
                    method:'get',
                    data:{
                              id_value:id
                    },
                    dataType:'json',
                    
                    success:function(data){
                   //     console.log(data)
                           $('#division_name').val(data.division_name);
                               $('#division_id').val(id);
                             $('#divisionModal').modal('show');
                              $('#action').val('Edit');
                               $('.modal-title').text('Edit Data');
                               $('#button_action').val('update');
                    }  
             
             ///end ajax
         })
                
                });

</script>



<script>
                $(document).on('click', '.delete', function(){
                    var id=$(this).attr("id");
                      alert(id);
                      if(confirm("Are you sure you want to Delete this data?"))
                         {
                             $.ajax({
                                        url:"{{route('ajaxdata.deleteDataById')}}",
                                        method:'get',
                                        data:{ id_value:id},
                               
                                        success:function(data){              
                                                      alert(data);
                                                     $('#division_table').DataTable().ajax.reload();
                                                     }
                        
                        //end of ajax;
                    });
                         }else{
                              return false
                           }    
                    
                });


</script>


<script>

   $(document).on('click', '#bulk_delete', function(){
        var id = [];
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $('.division_checkbox:checked').each(function(){
                id.push($(this).val());
            });
            if(id.length > 0)
            {
                $.ajax({
                    url:"{{ route('ajaxdata.massremove')}}",
                    method:"get",
                    data:{id:id},
                    success:function(data)
                    {
                        alert(data);
                        $('#division_table').DataTable().ajax.reload();
                    }
                });
            }
            else
            {
                alert("Please select atleast one checkbox");
            }
        }
    });

 
</script>

     


</div>



@endsection

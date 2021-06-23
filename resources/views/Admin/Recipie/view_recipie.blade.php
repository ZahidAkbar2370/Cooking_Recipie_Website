@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable"> 

<div class="box span12">
  <a href="{{url('admin-add-recipie')}}"><button class="btn btn-primary">Add Recipie</button></a>
  
  <div class="box-header" data-original-title>
    
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Recipies</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>Recipie Name</th>
          <th>Categorey</th>
          <th>SubCategorey</th>
          <th>Time Required</th>
          <th>User Name</th>
          <th>User Image</th>
          <th>Post Date</th>
          <th>Description</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>

        @if(!empty($all_recipies))
        @foreach ($all_recipies as $recipie)
          <tr>
           <td>{{ $recipie->id }}</td>
           <td>{{ $recipie->recipie_name }}</td>
           <td>{{ $recipie->categorey_name }}</td>
           <td>{{ $recipie->sub_categorey_name }}</td>
           <td>{{ $recipie->time_required }}</td>
           <td>{{ $recipie->user_id }}</td>
           <td>{{ $recipie->user_id }}</td>
           <td>{{ $recipie->created_at }}</td>
           <td>{{ $recipie->description }}</td>
           
           @if($recipie->publication_status == "1")
            <td class="center">
              <span class="label label-success">Active</span>
            </td>
              @else
            <td class="center">
              <span class="label label-danger">Unactive</span>
            </td>
            @endif

            <td>

              @if(($recipie->publication_status)=="1")
                <a class="btn btn-danger" href="{{URL::to('admin-recipie-unapprove/'.$recipie->id)}}">
                  <i class="halflings-icon white thumbs-down"></i>  
                </a>
              @else
                  <a class="btn btn-success" href="{{URL::to('admin-recipie-approve/'.$recipie->id)}}">
                  <i class="halflings-icon white thumbs-up"></i>  
                </a>
              @endif
                <a class="btn btn-info" href="{{URL::to('admin-edit-recipie/'.$recipie->id)}}"><i class="halflings-icon white edit"></i></a>
                <a class="btn btn-danger" href="admin-delete-recipie/{{$recipie->id}}"><i class="halflings-icon white trash"></i></a>
            </td>

          </tr>
        @endforeach
      @endif
   

      </tbody>
        
      
    </table>            
  </div>
</div><!--/span-->

</div><!--/row-->

    

@endsection
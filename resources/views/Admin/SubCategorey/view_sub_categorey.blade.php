@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable"> 

<div class="box span12">
  <a href="{{url('admin-add-sub-categorey')}}"><button class="btn btn-primary">Add Sub-Categorey</button></a>
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Sub Categorey</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>Sub Categorey Name</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @if(!empty($all_sub_categories))
        @foreach ($all_sub_categories as $sub_categorey)
            <tr>
              <td>{{ $sub_categorey->id }}</td>
              <td>{{ $sub_categorey->sub_categorey_name }}</td>

              @if($sub_categorey->publication_status == "1")
                <td class="center">
                  <span class="label label-success">Active</span>
                </td>
              @else
                <td class="center">
                  <span class="label label-danger">Unactive</span>
                </td>
              @endif

              <td>

                @if(($sub_categorey->publication_status)=="1")
                  <a class="btn btn-danger" href="{{URL::to('admin-sub-categorey-unapprove/'.$sub_categorey->id)}}">
                    <i class="halflings-icon white thumbs-down"></i>  
                  </a>
                @else
                    <a class="btn btn-success" href="{{URL::to('admin-sub-categorey-approve/'.$sub_categorey->id)}}">
                    <i class="halflings-icon white thumbs-up"></i>  
                  </a>
                @endif
                  <a class="btn btn-info" href="{{URL::to('admin-edit-sub-categorey/'.$sub_categorey->id)}}"><i class="halflings-icon white edit"></i></a>
                  <a class="btn btn-danger" href="admin-delete-sub-categorey/{{$sub_categorey->id}}"><i class="halflings-icon white trash"></i></a>
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
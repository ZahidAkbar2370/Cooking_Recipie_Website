@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable"> 

<div class="box span12">
  <a href="{{url('admin-add-user')}}"><button class="btn btn-primary">Add User</button></a>
  
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Users</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>Email</th>
          <th>Mobile #</th>
          <th>Address</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @if(!empty($all_users))
        @foreach ($all_users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->mobile_no }}</td>
              <td>{{ $user->address }}</td>

              @if($user->publication_status == "1")
                <td class="center">
                  <span class="label label-success">Active</span>
                </td>
              @else
                <td class="center">
                  <span class="label label-danger">Unactive</span>
                </td>
              @endif

              <td>

                @if(($user->publication_status)=="1")
                  <a class="btn btn-danger" href="{{URL::to('admin-user-unapprove/'.$user->id)}}">
                    <i class="halflings-icon white thumbs-down"></i>  
                  </a>
                @else
                    <a class="btn btn-success" href="{{URL::to('admin-user-approve/'.$user->id)}}">
                    <i class="halflings-icon white thumbs-up"></i>  
                  </a>
                @endif
                  <a class="btn btn-info" href="{{URL::to('admin-edit-user/'.$user->id)}}"><i class="halflings-icon white edit"></i></a>
                  <a class="btn btn-danger" href="admin-delete-user/{{$user->id}}"><i class="halflings-icon white trash"></i></a>
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
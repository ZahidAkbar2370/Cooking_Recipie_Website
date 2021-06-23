@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable">
 

<div class="box span12">
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Messages</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Post Date</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>

        @if(!empty($all_messages))
        @foreach ($all_messages as $all_messages)
            <tr>
              <td>{{ $all_messages->id }}</td>
              <td>{{ $all_messages->name }}</td>
              <td>{{ $all_messages->email }}</td>
              <td>{{ $all_messages->message }}</td>
              <td>{{ $all_messages->created_at }}</td>
              <td>
                <a class="btn btn-danger" href="admin-delete-message/{{$all_messages->id}}"><i class="halflings-icon white trash"></i></a>
              </td>

              
            </tr>
        @endforeach
      @endif
      </tbody>
        
      
    </table>            
  </div>
</><!--/span-->

</div><!--/row-->

    

@endsection
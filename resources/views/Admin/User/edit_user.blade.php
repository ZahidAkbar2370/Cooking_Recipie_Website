@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add User</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/admin-update-user',$edit_user->id)}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">User Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="name" value="{{ $edit_user->name}}" required>
				</div>
			</div>

            <div class="control-group">
				<label class="control-label" for="date01">Email</label>
				<div class="controls">
					<input type="email" class="input-xlarge" name="email" value="{{ $edit_user->email }}" required>
				</div>
			</div>

            <div class="control-group">
				<label class="control-label" for="date01">Password</label>
				<div class="controls">
					<input type="password" class="input-xlarge" name="password" value="{{ $edit_user->password }}" required>
				</div>
			</div>

            <div class="control-group">
				<label class="control-label" for="date01">Mobile #</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="mobile_no" value="{{ $edit_user->mobile_no }}" required>
				</div>
			</div>

            <div class="control-group">
				<label class="control-label" for="date01">Address</label>
				<div class="controls">
                    <textarea class="input-xlarge" name="address" required>{{ $edit_user->address }}</textarea>
					{{-- <input type="text" class="input-xlarge" name="name" required> --}}
				</div>
			</div>

			
			<div class="control-group">
				<div class="controls">
					<input type="submit" class="input-xlarge btn btn-primary" name="member_name" value="Save" >
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->



@endsection
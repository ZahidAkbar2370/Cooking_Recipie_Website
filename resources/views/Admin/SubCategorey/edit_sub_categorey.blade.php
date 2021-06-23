@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Edit Sub Caregory</h2>
		</div>
		<div class="box-content">

        <form action="{{URL::to('/admin-update-sub-categorey',$edit_sub_categorey->id)}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Sub Catgory Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="sub_categorey_name" value="{{ $edit_sub_categorey->sub_categorey_name}}" required>
				</div>
			</div>

			
			<div class="control-group">
				<div class="controls">
					<input type="submit" class="input-xlarge btn btn-primary" name="member_name" value="Update" >
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->



@endsection
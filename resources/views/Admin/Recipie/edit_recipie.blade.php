@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Recipie</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/admin-update-recipie',$edit_recipie->id)}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Recipie Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="recipie_name" required value="{{ $edit_recipie->recipie_name }}">
				</div>
			</div>



			<div class="control-group">
				<label class="control-label" for="date01">Select Categorey</label>
				<div class="controls">
					<select class="input-xlarge" name="categorey_name" required>
						<option value="">Select Categorey</option>
                        @if(!empty($all_categorey))
                            @foreach ($all_categorey as $categorey).
                                <option value="{{ $categorey->id }}" <?php if($categorey->id == $edit_recipie->categorey_id )echo "selected"; ?>>{{ $categorey->categorey_name }}</option>
                            @endforeach
                        @endif
					</select>
					{{-- <input type="text" class="input-xlarge" name="recipie_name" required> --}}
				</div>
			</div>

            <div class="control-group">
				<label class="control-label" for="date01">Select Sub Categorey</label>
				<div class="controls">
					<select class="input-xlarge" name="sub_categorey_name" required>
						<option value="">Select Sub-Categorey</option>
                        @if ($all_sub_categorey)
                            @foreach ($all_sub_categorey as $sub_categorey)
                            <option value="{{ $sub_categorey->id }}" <?php if($sub_categorey->id == $edit_recipie->sub_categorey_id )echo "selected"; ?>>{{ $sub_categorey->sub_categorey_name }}</option>
                            @endforeach
                        @endif
					</select>
					{{-- <input type="text" class="input-xlarge" name="recipie_name" required> --}}
				</div>
			</div>

            <div class="control-group">
				<label class="control-label" for="date01">Required Time</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="required_time" required value="{{ $edit_recipie->time_required }}">
				</div>
			</div>

            <div class="control-group">
				<label class="control-label" for="date01">Description</label>
				<div class="controls">
                    <textarea class="input-xlarge" name="description">{{ $edit_recipie->description }}</textarea>
				</div>
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
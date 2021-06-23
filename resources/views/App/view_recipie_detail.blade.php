@extends('App/app')
@section('content')
	
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<h1>Recipie Name</h1>
				<img src="1618276438.png" style="width: 450px;height: 380px;">
			</div>

			<div class="col-md-6">
				<table style="margin-top: 50px;">
					<tr>
						<th>Recipie Name</th>
						<td>Pajita</td>
					</tr>

					<tr>
						<th>Categorey</th>
						<td>Fast Food</td>
					</tr>

					<tr>
						<th>Sub-Categorey</th>
						<td>pizza</td>
					</tr>

					<tr>
						<th>Post By</th>
						<td>Zahid Akbar</td>
					</tr>

					<tr>
						<th>Post Date</th>
						<td>22-06-2021</td>
					</tr>

					<tr>
						<th>Time Required</th>
						<td>30 mints</td>
					</tr>

					{{-- <tr>
						<th>Vehicle No</th>
						<td>{{$driver_detail->vehicle_no}}</td>
					</tr>

					<tr>
						<th>Vehicle Type</th>
						<td>{{$driver_detail->vehicle_no}}</td>
					</tr>

					<tr>
						<th>License No</th>
						<td>{{$driver_detail->license_no}}</td>
					</tr> --}}
				</table>
<br><br>
                <h1>Leave a Comment</h1>
                            <form action="#" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="">
                                <input type="text" name="user_name" style="width:30%;height:38px" placeholder="Enter Name"> 
                                <input type="email" name="user_email" style="width:30%;height:38px" placeholder="Email Address">
                                <br><br>
                                <textarea name="user_comment" style="width:60%;border: 1px solid;" value="Enter Comment..."></textarea>
                                <br><br>
                                <input type="submit" name="" value="Comment">
                                <br><br>
                            </form>
                            
                        </div>
                    </div>
                </div>

<br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {{-- @if(!empty($select_comments)) --}}
                <h1>Recents Comments</h1>

                    {{-- @foreach($select_comments as $comments) --}}

                        <div style="background-color: gray;padding: 10px;margin-bottom: 10px;">
                            
                            <h3 style="color:white;">User Name: Zahid</h3>

                            <p>Comment Date:22-06-2021</p>
                            
                            <span>Comment : dhf sdf s fks flsk flskjf sflks fkls f sjdf sl fsdlk</span>
                        </div>

                    {{-- @endforeach --}}
                {{-- @endif --}}
                
            </div>
        </div>
    </div>



@endsection
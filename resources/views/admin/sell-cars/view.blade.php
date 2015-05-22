@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="text-left">
		        {!! link_to_route('admin.sell-cars.index', 'List Sell Your Car Enquiries', null, ['class' => 'btn btn-primary']) !!}
		    </p>
			<div class="panel panel-default">
				<div class="panel-heading">Sell Your Car Enquiry from {{ $enquiry->first_name }} {{ $enquiry->surname }}</div>
					<div class="panel-body">
						<table class="table table-striped">
							<tr>
								<td><b>Time sent</b></td>
								<td>{{ $enquiry->created_at }}</td>
							</tr>	
							<tr>
								<td><b>City</b></td>
								<td>{{ $city }}</td>
							</tr>										
							<tr>
								<td><b>Name</b></td>
								<td>{{ $enquiry->firstname }} {{ $enquiry->surname }}</td>
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></td>
							</tr>
							<tr>
								<td><b>Phone</b></td>
								<td>{{ $enquiry->telephone }}</td>
							</tr>
							<tr>
								<td><b>Make</b></td>
								<td>{{ $enquiry->make }}</td>
							</tr>
							<tr>
								<td><b>Model</b></td>
								<td>{{ $enquiry->model }}</td>
							</tr>
							<tr>
								<td><b>Year</b></td>
								<td>{{ $enquiry->year }}</td>
							</tr>
							<tr>
								<td><b>Mileage</b></td>
								<td>{{ $enquiry->mileage }}</td>
							</tr>		
							<tr>
								<td><b>Colour</b></td>
								<td>{{ $enquiry->colour }}</td>
							</tr>
							<tr>
								<td><b>Registration</b></td>
								<td>{{ $enquiry->registration }}</td>
							</tr>
							@if (trim($enquiry->image_path1) != '')
								<tr>									
									<td colspan="2"><b>Picture 1</b></td>								
								</tr>
								<tr>									
									<td colspan="2"><img src="{{ $enquiry->image_path1 }}"></td>								
								</tr>
							@endif
							@if (trim($enquiry->image_path2) != '')
								<tr>									
									<td colspan="2"><b>Picture 2</b></td>								
								</tr>
								<tr>
									<td colspan="2"><img src="{{ $enquiry->image_path2 }}"></td>								
								</tr>
							@endif
							@if (trim($enquiry->image_path3) != '')
								<tr>									
									<td colspan="2"><b>Picture 3</b></td>								
								</tr>
								<tr>
									<td colspan="2"><img src="{{ $enquiry->image_path3 }}"></td>								
								</tr>
							@endif
							@if (trim($enquiry->image_path4) != '')
								<tr>									
									<td colspan="2"><b>Picture 4</b></td>								
								</tr>
								<tr>
									<td colspan="2"><img src="{{ $enquiry->image_path4 }}"></td>								
								</tr>
							@endif
							@if (trim($enquiry->image_path5) != '')
								<tr>									
									<td colspan="2"><b>Picture 5</b></td>								
								</tr>
								<tr>
									<td colspan="2"><img src="{{ $enquiry->image_path5 }}"></td>								
								</tr>					
							@endif																																				
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')

@stop

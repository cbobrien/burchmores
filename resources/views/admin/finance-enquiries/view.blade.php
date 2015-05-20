@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Finance Enquiry from {{ $enquiry->first_name }} {{ $enquiry->surname }}</div>
					<div class="panel-body">
						<table class="table table-striped">
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
								<td><b>Work Phone</b></td>
								<td>{{ $enquiry->telephone }}</td>
							</tr>
							<tr>
								<td><b>Requirements</b></td>
								<td>{{ $enquiry->requirements }}</td>
							</tr>				
							<tr>
								<td><b>Time sent</b></td>
								<td>{{ $enquiry->created_at }}</td>
							</tr>																																						
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

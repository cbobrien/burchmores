@extends('admin/master')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<p class="text-right">
			        {!! link_to_route('admin.location.create', 'New Location') !!}
			    </p>
				@if (Session::has('message'))
					<div class="alert alert-success alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						{{ Session::get('message') }}
					</div>
				@endif
				<div class="panel panel-default">
					<div class="panel-heading">Locations</div>
					<div class="panel-body">
						<table id="cars" class="table table-hover table-striped table-bordered">
						    <thead>
						        <tr>						        	
						            <th class="col-md-2">Name</th>
						            <th class="col-md-2">City</th>
						            <th class="col-md-2">Address</th>
						            <th class="col-md-1">Longitude</th>
						            <th class="col-md-1">latitude</th>
						            <th class="col-md-2">Telephone</th>
						            <th class="col-md-1 text-center">Edit</th>
						            <th class="col-md-1 text-center">Delete</th>					         
						        </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script>
		$(function() {
		    oTable = $('#cars').DataTable({
		        "processing": true,
		        "serverSide": true,
		        "ajax": "{{ Config::get('app.url') }}/admin/location/all",
		        "columns": [			        	
		           	{data: 'name', name: 'name'},
		           	{data: 'city', name: 'city'},
		           	{data: 'address', name: 'address'},
		           	{data: 'longitude', name: 'longitude'},
		           	{data: 'latitude', name: 'latitude'},
		           	{data: 'telephone', name: 'telephone'},
		            {data: 'edit', searchable: false, name: 'edit', orderable: false, class: 'text-center'},
		            {data: 'delete', searchable: false, name: 'delete', orderable: false, class: 'text-center'}       
		        ]
		    });
		});
	</script>

	@include('admin.partials.confirm') 
@stop




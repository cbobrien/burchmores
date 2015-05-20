@extends('admin/master')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<p class="text-right">
			        {!! link_to_route('admin.testimonial.create', 'New Testimonial') !!}
			    </p>
				@if (Session::has('message'))
					<div class="alert alert-success alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						{{ Session::get('message') }}
					</div>
				@endif
				<div class="panel panel-default">
					<div class="panel-heading">Testimonials</div>
					<div class="panel-body">
						<table id="cars" class="table table-hover table-striped table-bordered">
						    <thead>
						        <tr>						        	
						            <th class="col-md-10">City</th>
						            <th class="col-md-10">Name</th>
						            <th class="col-md-10">Content</th>
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
		        "ajax": "{{ Config::get('app.url') }}/admin/testimonial/all",
		        "columns": [			        	
		           	{data: 'city', name: 'city'},
		           	{data: 'name', name: 'name'},
		           	{data: 'content', name: 'content'},
		            {data: 'edit', searchable: false, name: 'edit', orderable: false, class: 'text-center'},
		            {data: 'delete', searchable: false, name: 'delete', orderable: false, class: 'text-center'}       
		        ]
		    });
		});
	</script>

	@include('admin.partials.confirm') 
@stop




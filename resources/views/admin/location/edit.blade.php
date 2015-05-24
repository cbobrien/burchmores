@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Location</div>
				<div class="panel-body">

					@if (Session::has('message'))
						<div class="alert alert-success alert-dismissible" role="alert">
	  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('message') }}
						</div>
					@endif

					@include('errors.list')

					{!! Form::open(['method' => 'PATCH', 'route' => ['admin.location.update', $location->id], 'class' => 'form-horizontal']) !!}

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								{!! Form::text('name', $location->name, ['class' => 'form-control']) !!}
							</div>
						</div>						

						<div class="form-group">
							<label for="category" class="col-md-4 control-label">City</label>
							<div class="col-md-6">
								{!! Form::select('city_id', [null => 'Please Select'] + $cities, $location->city_id, ['class' => 'form-control']) !!}
							</div>
						</div>										

						<div class="form-group">
							<label for="description" class="col-md-4 control-label">Address</label>
							<div class="col-md-6">
								{!! Form::textarea('address', $location->address, ['class' => 'form-control', 'id' => 'richtext']) !!}
							</div>
						</div>			

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Longitude</label>
							<div class="col-md-6">
								{!! Form::text('longitude', $location->longitude, ['class' => 'form-control']) !!}
							</div>
						</div>			

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Latitude</label>
							<div class="col-md-6">
								{!! Form::text('latitude', $location->latitude, ['class' => 'form-control']) !!}
							</div>
						</div>							

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Telephone</label>
							<div class="col-md-6">
								{!! Form::text('telephone', $location->telephone, ['class' => 'form-control']) !!}
							</div>
						</div>		

						<div class="form-group">
							<label for="emails_to" class="col-md-4 control-label">Emails To</label>
							<div class="col-md-6">
								{!! Form::textarea('emails_to', $location->emails_to, ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<label for="emails_cc" class="col-md-4 control-label">Emails CC</label>
							<div class="col-md-6">
								{!! Form::textarea('emails_cc', $location->emails_cc, ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</div>
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')

@stop

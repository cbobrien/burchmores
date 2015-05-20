@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="text-right">
		        {!! link_to_route('admin.location.index', 'All Locations') !!}
		    </p>
			<div class="panel panel-default">
				<div class="panel-heading">Add New Location</div>
				<div class="panel-body">									

					@include ('errors.list')

					{!! Form::open(['route' => 'admin.location.store', 'class' => 'form-horizontal', 'files' => true]) !!}					

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								{!! Form::text('name', null, ['class' => 'form-control']) !!}
							</div>
						</div>						

						<div class="form-group">
							<label for="category" class="col-md-4 control-label">City</label>
							<div class="col-md-6">
								{!! Form::select('city_id', [null => 'Please Select'] + $cities, null, ['class' => 'form-control']) !!}
							</div>
						</div>										

						<div class="form-group">
							<label for="description" class="col-md-4 control-label">Address</label>
							<div class="col-md-6">
								{!! Form::textarea('address', null, ['class' => 'form-control', 'id' => 'richtext']) !!}
							</div>
						</div>			

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Longitude</label>
							<div class="col-md-6">
								{!! Form::text('longitude', null, ['class' => 'form-control']) !!}
							</div>
						</div>			

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Latitude</label>
							<div class="col-md-6">
								{!! Form::text('latitude', null, ['class' => 'form-control']) !!}
							</div>
						</div>							

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Telephone</label>
							<div class="col-md-6">
								{!! Form::text('telephone', null, ['class' => 'form-control']) !!}
							</div>
						</div>													

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Add</button>
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

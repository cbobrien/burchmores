@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Testimonial</div>
				<div class="panel-body">

					@if (Session::has('message'))
						<div class="alert alert-success alert-dismissible" role="alert">
	  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('message') }}
						</div>
					@endif

					@include('errors.list')

					{!! Form::open(['method' => 'PATCH', 'route' => ['admin.testimonial.update', $testimonial->id], 'class' => 'form-horizontal']) !!}

						<div class="form-group">
							<label for="category" class="col-md-4 control-label">City</label>
							<div class="col-md-6">
								{!! Form::select('city_id', [null => 'Please Select'] + $cities, $testimonial->city_id, ['class' => 'form-control']) !!}
							</div>
						</div>	

						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								{!! Form::text('name', $testimonial->name, ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<label for="content" class="col-md-4 control-label">Content</label>
							<div class="col-md-6">
								{!! Form::textarea('content', $testimonial->content, ['class' => 'form-control']) !!}
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

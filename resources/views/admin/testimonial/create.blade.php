@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="text-right">
		        {!! link_to_route('admin.testimonial.index', 'All Testimonials') !!}
		    </p>
			<div class="panel panel-default">
				<div class="panel-heading">Add New Testimonial</div>
				<div class="panel-body">									

					@include ('errors.list')

					{!! Form::open(['route' => 'admin.testimonial.store', 'class' => 'form-horizontal', 'files' => true]) !!}					

						<div class="form-group">
							<label for="category" class="col-md-4 control-label">City</label>
							<div class="col-md-6">
								{!! Form::select('city_id', [null => 'Please Select'] + $cities, null, ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								{!! Form::text('name', null, ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<label for="content" class="col-md-4 control-label">Content</label>
							<div class="col-md-6">
								{!! Form::text('content', null, ['class' => 'form-control']) !!}
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

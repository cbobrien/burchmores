@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Auction</div>
				<div class="panel-body">

					@if (Session::has('message'))
						<div class="alert alert-success alert-dismissible" role="alert">
	  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('message') }}
						</div>
					@endif

					@include('errors.list')

					{!! Form::open(['method' => 'PATCH', 'route' => ['admin.auctions.update', $auction->id], 'class' => 'form-horizontal', 'files' => true]) !!}

						<div class="form-group">
							<label for="category" class="col-md-4 control-label">Location</label>
							<div class="col-md-6">
								{!! Form::select('location_id', $locations, $auction->location_id, ['class' => 'form-control']) !!}
							</div>
						</div>		

						<div class="form-group">
							<label for="category" class="col-md-4 control-label">Date and time</label>
							<div class="col-md-6">
								{!! Form::input('text', 'auction_date', $auction->auction_date, ['class' => 'form-control date-picker']) !!}
							</div>
						</div>	

						<div class="form-group">
			       <label for="image_path" class="col-md-4 control-label">Vehicle List</label>
			       <div class="col-md-6">
			        @if ($auction->file_path != '')
			         <a href="{{ $auction->file_path }}">{{ $auction->file_path }}</a>
			        @else
			         No file.
			        @endif 
			        {!! Form::file('file_path') !!}         
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

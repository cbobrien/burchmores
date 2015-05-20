@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="text-right">
		        {!! link_to_route('admin.auctions.index', 'All Auctions') !!}
		    </p>
			<div class="panel panel-default">
				<div class="panel-heading">Add New Auction</div>
				<div class="panel-body">									

					@include ('errors.list')

					{!! Form::open(['route' => 'admin.auctions.store', 'class' => 'form-horizontal', 'files' => true]) !!}				

						<div class="form-group">
							<label for="category" class="col-md-4 control-label">Location</label>
							<div class="col-md-6">
								{!! Form::select('location_id', [null => 'Please Select'] + $locations, null, ['class' => 'form-control']) !!}
							</div>
						</div>							

						<div class="form-group">
							<label for="category" class="col-md-4 control-label">Date &amp; Time</label>
							<div class="col-md-6">
								{!! Form::input('text', 'auction_date', null, ['class' => 'form-control date-picker']) !!}
							</div>
						</div>				

						<div class="form-group">
					       <label for="image_path" class="col-md-4 control-label">Vehicle List</label>
					       <div class="col-md-6">
					        {!! Form::file('file_path') !!}
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

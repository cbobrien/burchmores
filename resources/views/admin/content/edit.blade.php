@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		
			<div class="panel panel-default">
				<div class="panel-heading">Edit {{ ucfirst(str_replace('-', ' ', $page)) }} Content</div>
				<div class="panel-body">									

					@include ('errors.list')

					{!! Form::open(['route' => 'admin.content.update', 'class' => 'form-horizontal']) !!}				

						
						<div class="form-group">
							<label for="category" class="col-md-4 control-label">Content</label>
							<div class="col-md-6">
								{!! Form::textarea('content', $content, ['class' => 'form-control', 'id' => 'richtext']) !!}
							</div>
						</div>	

						<input type="hidden" name="page" text="{{ $page }}">			

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
	@include('admin/partials/rte');
@stop

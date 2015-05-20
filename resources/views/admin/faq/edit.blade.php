@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Car</div>
				<div class="panel-body">

					@if (Session::has('message'))
						<div class="alert alert-success alert-dismissible" role="alert">
	  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('message') }}
						</div>
					@endif

					@include('errors.list')

					{!! Form::open(['method' => 'PATCH', 'route' => ['admin.faq.update', $faq->id], 'class' => 'form-horizontal']) !!}

						<div class="form-group">
							<label for="title" class="col-md-4 control-label">Title</label>
							<div class="col-md-6">
								{!! Form::textarea('question', $faq->question, ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<label for="description" class="col-md-4 control-label">Description</label>
							<div class="col-md-6">
								{!! Form::textarea('answer', $faq->answer, ['class' => 'form-control']) !!}
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

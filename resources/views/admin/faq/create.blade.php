@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="text-right">
		        {!! link_to_route('admin.faq.index', 'All FAQs') !!}
		    </p>
			<div class="panel panel-default">
				<div class="panel-heading">Add New FAQ</div>
				<div class="panel-body">									

					@include ('errors.list')

					{!! Form::open(['route' => 'admin.faq.store', 'class' => 'form-horizontal', 'files' => true]) !!}					

						<div class="form-group">
							<label for="question" class="col-md-4 control-label">Question</label>
							<div class="col-md-6">
								{!! Form::textarea('question', null, ['class' => 'form-control', 'id' => 'richtext']) !!}
							</div>
						</div>

						<div class="form-group">
							<label for="answer" class="col-md-4 control-label">Answer</label>
							<div class="col-md-6">
								{!! Form::textarea('answer', null, ['class' => 'form-control', 'id' => 'richtext2']) !!}
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

	@include('admin/partials/rte');

@stop

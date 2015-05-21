@extends('layouts.master')

@section('content')

<div class="relative white-container">

	<h1 class="page-header">Finance Enquiry Form</h1>

	@include ('errors.list')

	<div class="form-container">

		{!! Form::open(['route' => 'finance-enquiry.send', 'class' => 'form-horizontal']) !!}

			<div class="row">
				<div class="col-md-12">
					<h3>Region</h3>
					{!! Form::select('city_id', [null => 'Please Select'] + $cities, null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->		

			<div class="row">
				<div class="col-md-12">
					<h3>First Name</h3>
					{!! Form::text('first_name', null) !!}	
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	

			<div class="row">
				<div class="col-md-12">
					<h3>Surname</h3>
					{!! Form::text('surname', null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->		

			<div class="row">
				<div class="col-md-12">
					<h3>Contact Number</h3>
					{!! Form::text('telephone', null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	

			<div class="row">
				<div class="col-md-12">
					<h3>Work Number</h3>
					{!! Form::text('work_telephone', null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	

			<div class="row">
				<div class="col-md-12">
					<h3>Email Address</h3>
					{!! Form::email('email', null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->														          
			
			<div class="row">
				<div class="col-md-12">
				<h3>Which Do You Require?</h3>
				{!! Form::radio('requirements', 'Finance') !!}	Finance <br>
				{!! Form::radio('requirements', 'Warranties') !!} Warranties <br>
				{!! Form::radio('requirements', 'Both') !!}	 Both <br>
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->

			<div class="row">
				<div class="col-md-12">
				<h3>Comments</h3>		
				{!! Form::textarea('comments', null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row --> 

			<div class="row padded">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							* Indicates a required field, and needs to be completed.	
						</div><!-- //.col-md-12 -->
					</div>
					<div class="row">
						<div class="col-md-12 terms-container">
							<div class="checkbox-container">
								<input type="checkbox" class="terms-checkbox" name="terms" />
							</div><!-- //.chechbox-container -->
							
								I have read and understand the terms and conditions and privacy statement of this website.
							
						</div><!-- //.col-md-12 -->
					</div><!-- //.row -->
				</div><!-- //.col-md-8 -->
				<div class="col-md-4">
					<input type="submit" class="submit green-btn" value="SUBMIT" />
				</div><!-- //.col-md-4 -->
			</div><!-- //.row -->			

		{!! Form::close() !!}

		</div><!-- //.form-container -->	

	</div><!-- //.relative -->

@stop
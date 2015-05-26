@extends('layouts.master')

@section('content')

<div class="relative white-container">

	<h1 class="page-header">Sell Your Car</h1>

	<div class="form-container">

		@include ('errors.list')

		{!! Form::open(['route' => 'sell-your-car.send', 'files' => true]) !!}
			<div class="row">
				<div class="col-md-12">
					<h3>Region</h3>
					{!! Form::select('city_id', [null => 'Please Select'] + $cities, null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	

			<div class="row">
				<div class="col-md-12">
					<h3>First Name</h3>		
					{!! Form::text('first_name', null, ['required']) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	   

			<div class="row">
				<div class="col-md-12">
					<h3>Surname</h3>			
					{!! Form::text('surname', null, ['required']) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	    

			<div class="row">
				<div class="col-md-12">
					<h3>Contact Number</h3>			
					{!! Form::text('telephone', null, ['required']) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	     

				<div class="row">
					<div class="col-md-12">
						<h3>Email Address</h3>			
						{!! Form::email('email', null, ['required']) !!}
					</div><!-- //.col-md-12 -->
				</div><!-- //.row -->

				<div class="row">
					<div class="col-md-12">
						<h3>Make</h3>			
						{!! Form::text('make', null, ['required']) !!}		
					</div><!-- //.col-md-12 -->
				</div><!-- //.row -->

			<div class="row">
				<div class="col-md-12">
					<h3>Model</h3>			
					{!! Form::text('model', null, ['required']) !!}		
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	  

			<div class="row">
				<div class="col-md-12">
					<h3>Year</h3>			
					{!! Form::text('year', null, ['required']) !!}		
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	 

			<div class="row">
				<div class="col-md-12">
					<h3>Mileage</h3>			
					{!! Form::text('mileage', null, ['required']) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	 

			<div class="row">
				<div class="col-md-12">
					<h3>Colour</h3>			
					{!! Form::text('colour', null, ['required']) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	 

			<div class="row">
				<div class="col-md-12">
					<h3>Registration</h3>			
					{!! Form::text('registration', null, ['required']) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	

			<div class="row">
				<div class="col-md-12">
					<h3>Comments</h3>			
					{!! Form::textarea('comments', null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	 

			<div class="row">
				<div class="col-md-12">
				<h3>Pic 1</h3>
				<div>
					{!! Form::file('image_path1') !!}
				</div>
			</div><!-- //.col-md-12 -->
		</div><!-- //.row -->	

			<div class="row">
				<div class="col-md-12">
				<h3>Pic 2</h3>
				<div>
					{!! Form::file('image_path2') !!}
				</div>
			</div><!-- //.col-md-12 -->
		</div><!-- //.row -->		

			<div class="row">
				<div class="col-md-12">
				<h3>Pic 3</h3>
				<div>
					{!! Form::file('image_path3') !!}
				</div>
			</div><!-- //.col-md-12 -->
		</div><!-- //.row -->	

			<div class="row">
				<div class="col-md-12">
				<h3>Pic 4</h3>
				<div>
					{!! Form::file('image_path4') !!}
				</div>
			</div><!-- //.col-md-12 -->
		</div><!-- //.row -->	

			<div class="row">
				<div class="col-md-12">
				<h3>Pic 5</h3>
				<div>
					{!! Form::file('image_path5') !!}
				</div>
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
							
								I have read and understand the <a target="_blank" href="terms">terms of use</a> and <a target="_blank" href="privacy">privacy statement</a> of this website.
							
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
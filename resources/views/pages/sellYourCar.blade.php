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
						<h3>Email Address</h3>			
						{!! Form::email('email', null) !!}
					</div><!-- //.col-md-12 -->
				</div><!-- //.row -->

				<div class="row">
					<div class="col-md-12">
						<h3>Make</h3>			
						{!! Form::text('make', null) !!}		
					</div><!-- //.col-md-12 -->
				</div><!-- //.row -->

			<div class="row">
				<div class="col-md-12">
					<h3>Model</h3>			
					{!! Form::text('model', null) !!}		
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	  

			<div class="row">
				<div class="col-md-12">
					<h3>Year</h3>			
					{!! Form::text('year', null) !!}		
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	 

			<div class="row">
				<div class="col-md-12">
					<h3>Mileage</h3>			
					{!! Form::text('mileage', null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	 

			<div class="row">
				<div class="col-md-12">
					<h3>Colour</h3>			
					{!! Form::text('colour', null) !!}
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	 

			<div class="row">
				<div class="col-md-12">
					<h3>Registration</h3>			
					{!! Form::text('registration', null) !!}
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

			<div class="row">
				<div class="col-md-12">

					<input type="submit" class="submit green-btn" value="SUBMIT" />

			</div><!-- //.col-md-12 -->
		</div><!-- //.row -->	

		{!! Form::close() !!}

	</div><!-- //.form-container -->	

	<!-- {!! Form::open(['route' => 'admin.auctions.store', 'class' => 'form-horizontal', 'files' => true]) !!}				

		<div class="form-group">
			<label for="category" class="col-md-4 control-label">Location</label>
			<div class="col-md-6">
				
			</div>
		</div>							

		<div class="form-group">
			<label for="category" class="col-md-4 control-label">Date &amp; Time</label>
			<div class="col-md-6">
				{!! Form::input('text', 'auction_date', null, ['class' => 'form-control date-picker']) !!}
			</div>
		</div>					

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">Add</button>
			</div>
		</div>
	{!! Form::close() !!} -->

	{{-- <div class="form-container">
		<form action="">
			<div class="row">
				<div class="col-md-12">
					Should the vehicle brochure not be uploaded yet / if you  have questions about this auction, please complete the  contact form below, and we’ll get back to you.
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->
			<div class="row">
				<div class="col-md-12">
					<h3>Name*</h3>
					<input type="text" required name="Name" />
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->		
			<div class="row">
				<div class="col-md-12">
					<h3>Surname*</h3>
					<input type="text" required name="Surname" />
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	
			<div class="row">
				<div class="col-md-12">
					<h3>Contact Number</h3>
					<input type="text" required name="Contact Number" />
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->									
			<div class="row">
				<div class="col-md-12">
					<h3>Email Address*</h3>
					<input type="email" required name="Name" />
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->	
			<div class="row">
				<div class="col-md-12">
					<h3>Location*</h3>
					<select name="" id="">
						<option value="Cape Town">Cape Town</option>
						<option value="Durban">Durban</option>
						<option value="Johannesburg">Johannesburg</option>
					</select>
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->		
			<div class="row">
				<div class="col-md-12">
					<h3>Make</h3>
					<input type="text" required name="Make" />
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->						
			<div class="row">
				<div class="col-md-12">
					<h3>Comments / Questions</h3>
					<textarea name="comment" id="" cols="10" rows="5"></textarea>
					<input type="text" name="Comments" />
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
		</form>
	</div><!-- //.form-container -->	 --}}

</div><!-- //.relative -->

@stop
@extends('layouts.master')

@section('content')

<div class="relative white-container">

	<h1 class="page-header">Sell Your Car</h1>

	@include ('errors.list')

	{!! Form::open(['route' => 'sell-your-car.send', 'files' => true]) !!}
		<div class="form-group">
			<label for="city_id">Region</label>
			<div class="col-md-6">
				{!! Form::select('city_id', [null => 'Please Select'] + $cities, null, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			<label for="first_name">First Name</label>			
			{!! Form::text('first_name', null, ['class' => 'form-control']) !!}		
		</div>   

		<div class="form-group">
			<label for="surname">Surname</label>			
			{!! Form::text('surname', null, ['class' => 'form-control']) !!}		
		</div>    

		<div class="form-group">
			<label for="surname">Contact Number</label>			
			{!! Form::text('telephone', null, ['class' => 'form-control']) !!}		
		</div>      

 		<div class="form-group">
			<label for="surname">Email Address</label>			
			{!! Form::email('email', null, ['class' => 'form-control']) !!}		
		</div>  

		<div class="form-group">
			<label for="surname">Make</label>			
			{!! Form::text('make', null, ['class' => 'form-control']) !!}		
		</div> 

		<div class="form-group">
			<label for="surname">Model</label>			
			{!! Form::text('model', null, ['class' => 'form-control']) !!}		
		</div>  

		<div class="form-group">
			<label for="surname">Year</label>			
			{!! Form::text('year', null, ['class' => 'form-control']) !!}		
		</div> 

		<div class="form-group">
			<label for="surname">Mileage</label>			
			{!! Form::text('mileage', null, ['class' => 'form-control']) !!}		
		</div> 

		<div class="form-group">
			<label for="surname">Colour</label>			
			{!! Form::text('colour', null, ['class' => 'form-control']) !!}		
		</div> 

		<div class="form-group">
			<label for="surname">Registration</label>			
			{!! Form::text('registration', null, ['class' => 'form-control']) !!}		
		</div> 

		<div class="form-group">
			<label for="surname">Comments</label>			
			{!! Form::textarea('comments', null, ['class' => 'form-control']) !!}		
		</div>  

		<div class="form-group">
			<label for="image_path1">Pic 1</label>
			<div>
				{!! Form::file('image_path1') !!}
			</div>
		</div>

		<div class="form-group">
			<label for="image_path2">Pic 2</label>
			<div>
				{!! Form::file('image_path2') !!}
			</div>
		</div>	

		<div class="form-group">
			<label for="image_path3">Pic 3</label>
			<div>
				{!! Form::file('image_path3') !!}
			</div>
		</div>

		<div class="form-group">
			<label for="image_path4">Pic 4</label>
			<div>
				{!! Form::file('image_path4') !!}
			</div>
		</div>

		<div class="form-group">
			<label for="image_path5">Pic 5</label>
			<div>
				{!! Form::file('image_path5') !!}
			</div>
		</div>

		<div class="form-group">
			<div class="">
				<button type="submit" class="btn btn-primary">Send</button>
			</div>
		</div>

	{!! Form::close() !!}

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
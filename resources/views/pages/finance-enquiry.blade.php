@include ('errors.list')

	{!! Form::open(['route' => 'finance-enquiry.send', 'class' => 'form-horizontal']) !!}
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
			<label for="surname">Work Number</label>			
			{!! Form::text('work_telephone', null, ['class' => 'form-control']) !!}		
		</div>       
 
 		<div class="form-group">
			<label for="surname">Email Address</label>			
			{!! Form::text('email', null, ['class' => 'form-control']) !!}		
		</div>  
		
		<div class="form-group">
			<p>Which Do You Require?</p>
			{!! Form::radio('requirements', 'Finance') !!}	Finance <br>
			{!! Form::radio('requirements', 'Warranties') !!} Warranties <br>
			{!! Form::radio('requirements', 'Both') !!}	 Both <br>
		</div>

		<div class="form-group">
			<label for="surname">Comments</label>			
			{!! Form::textarea('comments', null, ['class' => 'form-control']) !!}		
		</div>  

		<div class="form-group">
			<div class="">
				<button type="submit" class="btn btn-primary">Send</button>
			</div>
		</div>

	{!! Form::close() !!}
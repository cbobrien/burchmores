@extends('layouts.master')

@section('content')

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>

<div class="relative white-container">

	

	<div class="row table-container">
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-header">Auction Details</h1>
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->			
			<div class="row">
				<div class="col-md-12">
					<h3>Auction Type</h3>
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->
			<div class="row">
				<div class="col-md-5">
					<h3>Date:</h3>
				</div><!-- //.col-md-5 -->
				<div class="col-md-7">
					DD / MM / YYYY
				</div><!-- //.col-md-7 -->
			</div><!-- //.row -->
			<div class="row">
				<div class="col-md-5">
					<h3>Time:</h3>
				</div><!-- //.col-md-5 -->
				<div class="col-md-7">
					DD / MM / YYYY
				</div><!-- //.col-md-7 -->
			</div><!-- //.row -->		
			<div class="row m-b-10">
				<div class="col-md-5">
					<h3>Address:</h3>
				</div><!-- //.col-md-5 -->
				<div class="col-md-7">
					Street Number,<br />
					Neighbourhood,<br />
					City <br />
				</div><!-- //.col-md-7 -->
			</div><!-- //.row -->			
			<div class="row">
				<div class="col-md-5">
					<h3>GPS</h3>
				</div><!-- //.col-md-5 -->
				<div class="col-md-7">
					0.00NW  0000NW
				</div><!-- //.col-md-7 -->
			</div><!-- //.row -->				
			<div class="row">
				<div class="col-md-5">
					<h3>Contact Number</h3>
				</div><!-- //.col-md-5 -->
				<div class="col-md-7">
					(000) 000 0000
				</div><!-- //.col-md-7 -->
			</div><!-- //.row -->		
			<div class="row">
				<div class="col-md-12">
					<a href="" class="green-btn download">DOWNLOAD VEHICLE LIST</a>
				</div><!-- //.col-md-12 -->
			</div><!-- //.row -->		


		</div><!-- //.col-md-5 -->
		<div class="col-md-7">
			<div class="g-map" id="auction-map"></div><!-- //#auction-map -->
		      <script>
		
		          /* Google Map styling */
		          var styles = [
		            {
		              stylers: [
		                { hue: "#006838" },
		                { saturation: -20 }
		              ]
		            },{
		              featureType: "road",
		              elementType: "geometry",
		              stylers: [
		                { color: "#d2d2d2" }      
		              ]
		            }
		          ];
		

              var myOptions = {
                zoom: 12,
                center: new google.maps.LatLng(-26.079283, 28.088367),
                mapTypeId: google.maps.MapTypeId.ROADMAP
              }
              var map = new google.maps.Map(document.getElementById("auction-map"),
                                            myOptions);

                  var image = new google.maps.MarkerImage('/img/map_point.png',
                    // This marker is 20 pixels wide by 32 pixels tall.
                    new google.maps.Size(42, 67),
                    // The origin for this image is 0,0.
                    new google.maps.Point(0,0),
                    // The anchor for this image is the base of the flagpole at 0,32.
                    new google.maps.Point(20, 67));

              map.setOptions({styles: styles});     

              var myLatLng = new google.maps.LatLng(-26.079283, 28.088367);
              var beachMarker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  icon: image
              });
		
		      </script>			
		</div><!-- //.col-md-7 -->
	</div><!-- //.row -->

	<h1 class="page-header mobile-m-t-30">Quick Contact Form:</h1>

	<div class="form-container">

		@include ('errors.list')

					{!! Form::open(['route' => 'admin.auctions.store', 'class' => 'form-horizontal', 'files' => true]) !!}	

						<div class="row">
							<div class="col-md-12">
								Should the vehicle brochure not be uploaded yet / if you  have questions about this auction, please complete the  contact form below, and we’ll get back to you.
							</div><!-- //.col-md-12 -->
						</div><!-- //.row -->					

						<div class="row">
							<div class="col-md-12">
								<h3>First name*</h3>
								{!! Form::input('text', 'first_name', null) !!}
							</div><!-- //.col-md-12 -->
						</div><!-- //.row -->		

						<div class="row">
							<div class="col-md-12">
								<h3>Surname*</h3>
								{!! Form::input('text', 'surname', null) !!}
							</div><!-- //.col-md-12 -->
						</div><!-- //.row -->		

						<div class="row">
							<div class="col-md-12">
								<h3>Email</h3>
								{!! Form::input('email', 'email', null) !!}
							</div><!-- //.col-md-12 -->
						</div><!-- //.row -->			

						<div class="row">
							<div class="col-md-12">
								<h3>Contact Number</h3>
								{!! Form::input('text', 'telephone', null) !!}
							</div><!-- //.col-md-12 -->
						</div><!-- //.row -->					

						<div class="row">
							<div class="col-md-12">
								<h3>Message</h3>
								{!! Form::textarea('message', null, ["cols"=>"10", "rows"=>"5"]) !!}
							</div><!-- //.col-md-12 -->
						</div><!-- //.row -->		

						<div class="row padded">
							<div class="col-md-8">
								<!--<div class="row">
									<div class="col-md-12">
										* Indicates a required field, and needs to be completed.	
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 terms-container">
										<div class="checkbox-container">
											<input type="checkbox" class="terms-checkbox" name="terms" />
										</div>
										
											I have read and understand the terms and conditions and privacy statement of this website.
										
									</div>
								</div>-->
							</div><!-- //.col-md-8 -->
							<div class="col-md-4">
								<input type="submit" class="submit green-btn" value="SUBMIT" />
							</div><!-- //.col-md-4 -->
						</div><!-- //.row -->					

					{!! Form::close() !!}
					
	</div><!-- //.form-container -->

</div><!-- //.relative -->

@stop
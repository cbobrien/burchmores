@extends('layouts.master')

@section('content')

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>

<div class="relative white-container">

	<h1 class="page-header">Contact Us:</h1>

	Call one of our auction managers for more information on our weekly auction specials.
	<br /><br />
	Burchmore’s offers you expert advice on car finance. We have finance available with 4 of the major banks. Contact us today – the hassle free way!

	<div class="row table-container contact">
    <div class="col-md-8 col-md-push-4">
      <h2>JOHANNESBURG</h2>
      <div class="row">
        <div class="col-md-4">
          <h3>Address</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
          Old Main Pretoria Road<br />
          Off M1 Highway<br />
          Sandton
        </div><!-- //.col-md-8 -->
      </div><!-- //.row --> 
      <div class="row">
        <div class="col-md-4">
          <h3>GPS Coordinates</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           -26.079283 : 28.088367
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->   
      <div class="row">
        <div class="col-md-4">
          <h3>Darryl Jacobson</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           E-mail: <a href="mailto:DarrylJ@mcmotor.co.za">Click here</a>
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->           
      <div class="row">
        <div class="col-md-4">
          <h3>Lionel Roux</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           E-mail: <a href="mailto:lionelr@mcmotor.co.za">Click here</a>
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->       
      <div class="row">
        <div class="col-md-4">
          <h3>Tel: </h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           011 258 9898
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->         
    </div><!-- //.col-md-8 -->    
		<div class="col-md-4 col-md-pull-8">
			<div class="g-map" id="joburg-map"></div><!-- //#joburg-map.g-map -->
		      <!-- Google maps Includes -->
		      
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
              var map = new google.maps.Map(document.getElementById("joburg-map"),
                                            myOptions);

                  var image = new google.maps.MarkerImage('/img/map_point.png',
                    // This marker is 20 pixels wide by 32 pixels tall.
                    new google.maps.Size(42, 67),
                    // The origin for this image is 0,0.
                    new google.maps.Point(0,0),
                    // The anchor for this image is the base of the flagpole at 0,32.
                    new google.maps.Point(21, 67));

              map.setOptions({styles: styles});     

              var myLatLng = new google.maps.LatLng(-26.079283, 28.088367);
              var beachMarker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  icon: image
              });
		
		      </script>

		</div><!-- //.col-md-4 -->

	</div><!-- //.row -->
	<div class="row table-container contact">
    <div class="col-md-8 col-md-push-4">
      <h2>CAPE TOWN</h2>
      <div class="row">
        <div class="col-md-4">
          <h3>Address</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
          Unit 9B, Phumelela Business Park <br />
          Montague Drive <br />
          Montague Gardens <br />
        </div><!-- //.col-md-8 -->
      </div><!-- //.row --> 
      <div class="row">
        <div class="col-md-4">
          <h3>GPS Coordinates</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           -33.871433 : 18.513867 
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->   
      <div class="row">
        <div class="col-md-4">
          <h3>Darryl Jacobson</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           E-mail: <a href="mailto:DarrylJ@mcmotor.co.za">Click here</a>
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->           
      <div class="row">
        <div class="col-md-4">
          <h3>Lee-Ann Swanepoel</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           E-mail: <a href="mailto:lee-AnnS@mcmotor.co.za">Click here</a>
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->       
      <div class="row">
        <div class="col-md-4">
          <h3>Tel: </h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           021 525 2700
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->         
    </div><!-- //.col-md-8 -->    
		<div class="col-md-4 col-md-pull-8">
			<div class="g-map" id="cape-map"></div><!-- //#joburg-map.g-map -->
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
                center: new google.maps.LatLng(-33.871433, 18.513867),
                mapTypeId: google.maps.MapTypeId.ROADMAP
              }
              var map = new google.maps.Map(document.getElementById("cape-map"),
                                            myOptions);

                  var image = new google.maps.MarkerImage('/img/map_point.png',
                    // This marker is 20 pixels wide by 32 pixels tall.
                    new google.maps.Size(42, 67),
                    // The origin for this image is 0,0.
                    new google.maps.Point(0,0),
                    // The anchor for this image is the base of the flagpole at 0,32.
                    new google.maps.Point(21, 67));

              map.setOptions({styles: styles});     

              var myLatLng = new google.maps.LatLng(-33.871433, 18.513867);
              var beachMarker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  icon: image
              });

		
		
		      </script>			
		</div><!-- //.col-md-4 -->
	</div><!-- //.row -->
	<div class="row table-container contact">
    <div class="col-md-8 col-md-push-4">
      <h2>DURBAN</h2>
      <div class="row">
        <div class="col-md-4">
          <h3>Address</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
          121 Intersite Avenue <br />
          Umgeni Business Park <br />
          Durban
        </div><!-- //.col-md-8 -->
      </div><!-- //.row --> 
      <div class="row">
        <div class="col-md-4">
          <h3>GPS Coordinates</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           -29.809117 : 30.985067
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->   
      <div class="row">
        <div class="col-md-4">
          <h3>Darryl Jacobson</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           E-mail: <a href="mailto:DarrylJ@mcmotor.co.za">Click here</a>
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->           
      <div class="row">
        <div class="col-md-4">
          <h3>Lionel Roux</h3>
        </div><!-- //.col-md-4 -->
        <div class="col-md-8">
           E-mail: <a href="mailto:machielA@mcmotor.co.za">Click here</a>
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->       
      <div class="row">
        <div class="col-md-4">
          <h3>Tel: </h3>
        </div><!-- //.col-md-4 --> 
        <div class="col-md-8">
           031 263 1800
        </div><!-- //.col-md-8 -->
      </div><!-- //.row -->         
    </div><!-- //.col-md-8 -->    
		<div class="col-md-4 col-md-pull-8">
			<div class="g-map" id="durban-map"></div><!-- //#joburg-map.g-map -->
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
                center: new google.maps.LatLng(-29.809117, 30.985067),
                mapTypeId: google.maps.MapTypeId.ROADMAP
              }
              var map = new google.maps.Map(document.getElementById("durban-map"),
                                            myOptions);

                  var image = new google.maps.MarkerImage('/img/map_point.png',
                    // This marker is 20 pixels wide by 32 pixels tall.
                    new google.maps.Size(42, 67),
                    // The origin for this image is 0,0.
                    new google.maps.Point(0,0),
                    // The anchor for this image is the base of the flagpole at 0,32.
                    new google.maps.Point(21, 67));

              map.setOptions({styles: styles});     

              var myLatLng = new google.maps.LatLng(-29.809117, 30.985067);
              var beachMarker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  icon: image
              });

		
		
		      </script>					
		</div><!-- //.col-md-4 -->

	</div><!-- //.row -->

	

</div><!-- //.relative -->



@stop
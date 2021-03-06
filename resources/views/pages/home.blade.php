@extends('layouts.master')

@section('content')


<div class="relative">

	<div id="banner">
		<div class="inner">
			<img src="/img/banner.png" class="img-responsive" alt="Burchmores Banner" />
		</div><!-- //.inner -->	
	</div><!-- //#banner -->
	
				@if (trim($video) != '')
					<div id="comic-header">
						<div id="darryl-home"><img src="/img/darryl-home.png" alt="Darryl" /></div><!-- //#darryl-home -->
						<div id="video-container">
							<div class="inner">				
									<iframe width="100%" height="315" src="{{ strip_tags($video) }}" frameborder="0" allowfullscreen></iframe>
							</div><!-- //.inner -->	
						</div><!-- //#video-container -->
						<div id="yellow-car"><img src="/img/yellow-car.png" alt="Yellow car" /></div><!-- //#yellow-car -->
						<div id="red-car"><img src="/img/red-car.png" alt="Red car" /></div><!-- //#red-car -->
					</div><!-- //#comic-header -->					
				@else
					<div id="comic-header" class="default">
						<div id="darryl-home"><img src="/img/darryl-home.png" alt="Darryl" /></div><!-- //#darryl-home -->
						<div id="video-container">
							<div class="inner">						
								<img class="img-responsive" src="/img/video-default.jpg" alt="BURCHMORES">
							</div><!-- //.inner -->	
						</div><!-- //#video-container -->
						<div id="yellow-car"><img src="/img/yellow-car.png" alt="Yellow car" /></div><!-- //#yellow-car -->
						<div id="red-car"><img src="/img/red-car.png" alt="Red car" /></div><!-- //#red-car -->
					</div><!-- //#comic-header -->					
				@endif



	<div class="content-container" id="home">

		{!! html_entity_decode($content) !!}

{{-- 		<h1 class="home">Welcome to BURCHMORES, where you can buy your dream vehicle at a wholesale price.</h2>

		BURCHMORES has been bringing together buyers and sellers for more than 100 years. Established in 1911 as JC BURCHMORES, we were one of the first companies to let people across South Africa buy and sell a wide range of vehicles at auction. From budget runarounds to exotic imports, we have the ideal vehicle for you. We are the only auction entre with a drive through auction facility thus offering prospective buyers a one of a kind view of the vehicles on show. 
		<br /><br />
		Viewing day for interested buyers is the day prior to the auction day. We have auction centres in Durban,  Johannesburg and Cape Town.
		<br /><br />
		BURCHMORES is a proudly Bidvest Company. --}}

		<h2 class="home">I WOULD LIKE TO</h2>
		<div class="row">
			<div class="col-md-6">
				<a href="/auctions" class="green-btn buy-a-car">BUY A CAR</a>
			</div><!-- //.col-md-6 -->
			<div class="col-md-6">
				<a href="/sell-your-car" class="green-btn sell-a-car">SELL A CAR</a>
			</div><!-- //.col-md-6 -->
		</div><!-- //.row -->
	</div><!-- //#home.content-container -->

</div><!-- //.relative -->	



@stop
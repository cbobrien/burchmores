@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> 

<div class="relative white-container">

	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Our Next Auction Takes Place in:</h1>
		</div><!-- //.col-md-12 -->
	</div><!-- //.row -->

	<script>

	</script>

	<div class="row">

		@foreach ($cities as $city)

			@if ($city->city == 'Johannesburg')

				<div class="col-md-4 timer-spacer">											

						@foreach ($city->locations as $location)

							<?php $i = 1; ?>

							@foreach ($location->auctions as $auction)

								@if ($i == 1)

									<div class="timer-container">
										<div class="header">
											Johannesburg
										</div>
										<div class="timer-inner">
											<div id="coun4tdown-jhb" class="digits">
												{{ $auction->auction_date }}
											</div>
										</div>
										<a href="/auction/{{ $auction->id }}" class="button">
											CLICK HERE FOR DETAILSss
										</a>
									</div>
								@else
									<a href="/auction/{{ $auction->id }}" id="countdown-jhb-1" class="future-auction">{{ $auction->auction_date }}</a>
								@endif
								
								@if ($i == 4)
									break;
								@endif

								<?php $i++; ?>

							@endforeach
							
						@endforeach
				</div>

			@endif

			@if ($city->city == 'Cape Town')

				<div class="col-md-4 timer-spacer">											

						@foreach ($city->locations as $location)

							<?php $i = 1; ?>

							@foreach ($location->auctions as $auction)

								@if ($i == 1)

									<div class="timer-container">
										<div class="header">
											Cape Town
										</div>
										<div class="timer-inner">
											<div id="coun4tdown-jhb" class="digits">
												{{ $auction->auction_date }}
											</div>
										</div>
										<a href="/auction/{{ $auction->id }}" class="button">
											CLICK HERE FOR DETAILS
										</a>
									</div>
								@else
									<a href="/auction/{{ $auction->id }}" id="countdown-jhb-1" class="future-auction">{{ $auction->auction_date }}</a>
								@endif
								
								<?php if($i == 4)break; ?>
								
								
								<?php $i++; ?>

							@endforeach							
						@endforeach

				</div>

			@endif

			@if ($city->city == 'Durban')

				<div class="col-md-4 timer-spacer">											

						@foreach ($city->locations as $location)

							<?php $i = 1; ?>

							@foreach ($location->auctions as $auction)

								@if ($i == 1)

									<div class="timer-container">
										<div class="header">
											Durban
										</div>
										<div class="timer-inner">
											<div id="coun4tdown-jhb" class="digits">
												{{ $auction->auction_date }}
											</div>
										</div>
										<a href="/auction/{{ $auction->id }}" class="button">
											CLICK HERE FOR DETAILS
										</a>
									</div>
								@else
									<a href="/auction/{{ $auction->id }}" id="countdown-jhb-1" class="future-auction">{{ $auction->auction_date }}</a>
								@endif
								
								@if ($i == 4)
									break;
								@endif
								
								<?php $i++; ?>

							@endforeach
						@endforeach
				</div>

			@endif

		@endforeach

		{{-- <div class="col-md-4 timer-spacer">
			<div class="timer-container">
				<div class="header">
					JOHANNESBURG:
				</div><!-- //.header -->
				<div class="timer-inner">
					<div id="countdown-jhb" class="digits">
						00:00:00
					</div><!-- //.digits --> 

					DAYS HOURS MINUTES
				</div><!-- //.timer-inner -->
				<a href="auction" class="button">
					CLICK HERE FOR DETAILS
				</a>
			</div><!-- //.timer-container -->
			<a href="auction" id="countdown-jhb-1" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>
			<a href="auction" id="countdown-jhb-2" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>
			<a href="auction" id="countdown-jhb-3" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>
		</div><!-- //.col-md-4 -->
		<div class="col-md-4 timer-spacer">
			<div class="timer-container">
				<div class="header">
					CAPE TOWN:
				</div><!-- //.header -->
				<div class="timer-inner">
					<div id="countdown-cpt" class="digits">
						00:00:00
					</div><!-- //.digits --> 				

					DAYS HOURS MINUTES
				</div><!-- //.timer-inner -->
				<a href="auction" class="button">
					CLICK HERE FOR DETAILS
				</a>
			</div>//.timer-container
			<a href="auction" id="countdown-cpt-1" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>
			<a href="auction" id="countdown-cpt-2" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>
			<a href="auction" id="countdown-cpt-3" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>			
		</div><!-- //.col-md-4 -->
		<div class="col-md-4 timer-spacer">
			<div class="timer-container">
				<div class="header">
					DURBAN:
				</div><!-- //.header -->
				<div class="timer-inner">
					<div id="countdown-dbn" class="digits">
						00:00:00
					</div><!-- //.digits --> 

					DAYS HOURS MINUTES
				</div><!-- //.timer-inner -->
				<a href="auction" class="button">
					CLICK HERE FOR DETAILS
				</a>
			</div><!-- //.timer-container -->
			<a href="auction" id="countdown-dbn-1" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>
			<a href="auction" id="countdown-dbn-2" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>
			<a href="auction" id="countdown-dbn-3" class="future-auction">Auction Thereafter: Days : Hours : Minutes</a>			
		</div><!-- //.col-md-4 -->
	</div><!-- //.row -->
 --}}
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header m-t-40">What Do People Who've Bought From Us Think?</h1>
		</div><!-- //.col-md-12 -->
	</div><!-- //.row -->	

	<div class="row">

		@foreach ($cities as $city)

			<div class="col-md-4 testimonial">
					
					<h2>{{ $city->city }}</h2>
					
					<p class="body">

						@foreach ($city->testimonials as $testimonial)

							{{ $testimonial->content }} 
							{{ trim($testimonial->name) != '' ? ' - ' : '' }}
							{{ $testimonial->name }}
							<br>

						@endforeach

					</p><!-- //.body -->	

			</div><!-- //.col-md-4 -->
		
		@endforeach	
	
	</div><!-- //.row -->

</div><!-- //.relative -->

@stop
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

		<?php
			$time_jhb_1 = '';
			$time_jhb_2 = '';
			$time_jhb_3 = '';
			$time_jhb_4 = '';
			$time_cpt_1 = '';
			$time_cpt_2 = '';
			$time_cpt_3 = '';
			$time_cpt_4 = '';
			$time_dbn_1 = '';
			$time_dbn_2 = '';
			$time_dbn_3 = '';
			$time_dbn_4 = '';
		?>

		@foreach ($cities as $city)

				<?php $city_name = $city->name; ?>

			@if ($city->city == 'Johannesburg')

				<div class="col-md-4 timer-spacer">											
				
				
						<?php $auction_count = 0; ?>
		
						@foreach ($city->locations as $location)

							<?php $i = 1; ?>

							@foreach ($location->auctions as $auction)

								<?php $auction_count++; ?>

								@if ($i == 1)

									<div class="timer-container">
										<div class="header">
											Johannesburg
										</div>
										<div class="timer-inner">
											<div id="countdown-jhb" class="digits">
												{{ $auction->auction_date }}
												<?php ${"time_jhb_" . $i} = $auction->auction_date; ?>
			
											</div>
										</div>
										<a href="/auction/{{ $auction->id }}" class="button">
											CLICK HERE FOR DETAILS
										</a>
									</div>
								@else
									<a href="/auction/{{ $auction->id }}" id="countdown-jhb-1" class="future-auction">{{ $auction->auction_date }}</a>
								@endif
								
								<?php if($i == 4) break; ?>

								<?php $i++; ?>

							@endforeach
							
						@endforeach

						@if($auction_count == 0)			
							<p>No auctions</p>					
						@endif
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
												<?php  ${"time_cpt_". $i} = $auction->auction_date; ?>

												<?php echo $city_name; ?>
											</div>
										</div>
										<a href="/auction/{{ $auction->id }}" class="button">
											CLICK HERE FOR DETAILS
										</a>
									</div>
								@else
									<a href="/auction/{{ $auction->id }}" id="countdown-jhb-1" class="future-auction">{{ $auction->auction_date }}</a>
								@endif
								
								<?php if($i == 4) break; ?>
								
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
												<?php ${"time_dbn_" . $i} = $auction->auction_date; ?>
											</div>
										</div>
										<a href="/auction/{{ $auction->id }}" class="button">
											CLICK HERE FOR DETAILS
										</a>
									</div>
								@else
									<a href="/auction/{{ $auction->id }}" id="countdown-jhb-1" class="future-auction">{{ $auction->auction_date }}</a>
								@endif
								
								<?php if($i == 4) break; ?>									
								
								<?php $i++; ?>

							@endforeach
						@endforeach
				</div>

			@endif

		@endforeach


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

@section('scripts')

<script>


	// Date.prototype.addHours= function(t, h){
	//     this.setHours(this.getHours()+h);
	//     return this;
	// }

	// function addHours(t, h) {
	// 	// return t.getHours() + h;

	// 	return t.setHours(t.getHours() + h);
	// 	// return t.setHours(t.getHours() + h);
	// }


	// alert(addHours(new Date("{{ $time_jhb_1 }}"), 4));


		// Date.addHours(new Date("{{ $time_jhb_1 }}"), 2);
	$(function() {
	 	$('#countdown-jhb').countdown({until: new Date("{{ $time_jhb_1 }}"), padZeroes: true, layout: '{dnn} {hnn} {mnn}'});
	  // $('#countdown-cpt').countdown({until: liftoffTime, padZeroes: true, layout: '{dnn} {hnn} {mnn}'});
	  // $('#countdown-dbn').countdown({until: liftoffTime, padZeroes: true, layout: '{dnn} {hnn} {mnn}'});

	  // $('#countdown-jhb-1').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hnn} Hours, {mn} Minutes '});
	  // $('#countdown-jhb-2').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
	  // $('#countdown-jhb-3').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});


	  // $('#countdown-cpt-1').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
	  // $('#countdown-cpt-2').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
	  // $('#countdown-cpt-3').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});

	  // $('#countdown-dbn-1').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
	  // $('#countdown-dbn-2').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
	  // $('#countdown-dbn-3').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '}); 
	});

	
	</script>
  @stop
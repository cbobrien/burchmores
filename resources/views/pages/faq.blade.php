@extends('layouts.master')

@section('content')

<div class="relative white-container faqs">	

	<h1 class="page-header">FAQs</h1><!-- //.page-header -->


		@foreach ($faqs as $faq)

			<div class="faq-bar">
				<h2>{!!html_entity_decode($faq->question)!!}</h2>
				<div class="faq-container">
					<div class="inner">
						{!!html_entity_decode($faq->answer)!!}
					</div><!-- //.inner -->
					<div class="clearfix"></div><!-- //.clearfix -->
				</div><!-- //.faq-container -->	
			</div><!-- //.faq-bar -->

		@endforeach	

		<br /><br />
		<b>Having pre-approved finance is like shopping with a cheque in your back pocket. You'll find it easier to decide which car to buy if you know upfront how much finance you qualify for.</b>

		<h3>Please Note:</h3>
		<h2 class="m-t-0">WE DO NOT ACCEPT CASH ON THE PREMISES WHAT-SO-EVER </h2>

</div><!-- //.relative -->

@stop
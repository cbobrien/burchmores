@extends('layouts.master')

@section('content')

<div class="relative white-container">

  <h1 class="page-header">Thank you for your enquiry.</h1>
  <h3>We will get back to you shortly.</h3>

  @if (Session::has('message'))
  	<div class="alert alert-success alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		{{ Session::get('message') }}
  	</div>
  @endif

</div><!-- //.relative -->

@stop
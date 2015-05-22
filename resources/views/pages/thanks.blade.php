@extends('layouts.master')

@section('content')

<div class="relative white-container">

  @if (Session::has('message'))

      <h1 class="page-header">{{ Session::get('message') }}</h1>

  @endif

</div><!-- //.relative -->

@stop
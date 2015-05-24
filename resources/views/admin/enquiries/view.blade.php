@extends('admin/master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="text-left">
		        {!! link_to_route('admin.enquiries.index', 'List Auction Enquiries', null, ['class' => 'btn btn-primary']) !!}
		    </p>
			<div class="panel panel-default">
				<div class="panel-heading">Auction Enquiry from {{ $enquiry->first_name }} {{ $enquiry->surname }}</div>
					<div class="panel-body">
						<table class="table table-striped">
							<tr>
								<td><b>Time sent</b></td>
								<td>{{ $enquiry->created_at }}</td>
							</tr>	
							<tr>
								<td><b>Location</b></td>
								<td>{{ $auction->location->name }}</td>
							</tr>	
							<tr>
								<td><b>Auction Date</b></td>
								<td>{{ $auction->auction_date }}</td>
							</tr>										
							<tr>
								<td><b>Name</b></td>
								<td>{{ $enquiry->firstname }} {{ $enquiry->surname }}</td>
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></td>
							</tr>
							<tr>
								<td><b>Phone</b></td>
								<td>{{ $enquiry->telephone }}</td>
							</tr>
							<tr>
								<td><b>Message</b></td>
								<td>{!! html_entity_decode($enquiry->message) !!}</td>
							</tr>
																																
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')

@stop

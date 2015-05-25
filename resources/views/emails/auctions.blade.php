<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body style="font-family:sans-serif;background:#fff">
		<h2 style="color:#006838;">Auction Enquiry from the Burchmores website</h2>
		<br>
		<b>Auction Location: </b>: {{ $auction_location }}<br>
		<b>Auction Date: </b>: {{ $auction_date }}<br>
		<b>Auction Time: </b>: {{ $auction_time }}<br>
		<div>
			<table width="100%">
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Name:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $firstname }} {{ $surname }}</td>
				</tr>
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Email:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $email }}</td>
				</tr>
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Tel:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $tel }}</td>
				</tr>				
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Date sent:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $date_sent }}</td>
				</tr>
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Time sent:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $time_sent }}</td>
				</tr>
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Message:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $message_body }}</td>
				</tr>				
			</table>						
		</div>
	</body>
</html>

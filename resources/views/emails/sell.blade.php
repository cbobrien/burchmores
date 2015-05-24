<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body style="font-family:sans-serif;background:#fff">
		<h2 style="color:#006838;">Sell Your Car Enquiry from the Burchmores website</h2>
		<br>
		<b>City: </b>: {{ $city }}<br><br>
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
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Make:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $make }}</td>
				</tr>	
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Model:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $model }}</td>
				</tr>	
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Year:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $year }}</td>
				</tr>	
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Mileage:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $mileage }}</td>
				</tr>	
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Colour:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $colour }}</td>
				</tr>	
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Registration:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $registration }}</td>
				</tr>	
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Comments:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $comments }}</td>
				</tr>			
			</table>						
		</div>
	</body>
</html>

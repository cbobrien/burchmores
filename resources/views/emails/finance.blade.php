<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body style="font-family:sans-serif;background:#fff">
		<h2 style="color:#006838;">Finance Enquiry from the Burchmores website</h2>
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
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Work Tel:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $work_tel }}</td>
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
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Requirements:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $requirements }}</td>
				</tr>	
				<tr>
					<td style="padding:10px;background:#ebebeb;width:15%"><b>Comments:</b></td>
					<td style="padding:10px;background:#f7f7f7">{{ $comments }}</td>
				</tr>							
			</table>						
		</div>
	</body>
</html>

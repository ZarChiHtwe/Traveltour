<p>Hi, This email is sent from Let's Travel Travel&Tours Agency.</p>
<table cellpadding="10px;" style="border: 1px solid black; width: 50%;">
	<tr>
		<td colspan="2" style="text-align: center"><h3>Booking Receipt</h3></td>
	</tr>
	<tr>
		<td><h5>VoucherNo: {{$data['voucherno']}}</h5></td>
		<td><h5 style="text-align: right;">Date: {{$data['date']}}</h5></td>
	</tr>
	<tr>
		<td><h5>Travel Package:</h5></td>
		<td>{{$data['package']}}</td>
	</tr>
	<tr>
		<td><h5>Depature Date:</h5></td>
		<td>{{$data['depaturedate']}}</td>
	</tr>
	<tr>
		<td><h5>Depature Time:</h5></td>
		<td>{{$data['depaturetime']}}</td>
	</tr>
	<tr>
		<td><h5>Car:</h5></td>
		<td>{{$data['car']}} ({{$data['cartype']}})</td>
	</tr>
	<tr>
		<td><h5>Hotel:</h5></td>
		<td>{{$data['hotel']}} with {{$data['numberofpeople']}} peoples</td>
	</tr>
	<tr>
		<td><h5>Total Amount:</h5></td>
		<td>{{$data['grandtotal']}}Ks</td>
	</tr>
</table>
<p>You can use this email to ensure that you had booked Travel Package from us.</p>
<p>Thanks you for using ours Travel&Tours Agency and have a great trip.</p>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Email</th>
				<th>Password</th>
				<th>KTM</th>
				<th>Slip SPP</th>
			</tr>
		</thead>
	</table>
	<table>
		<tbody>
			@foreach($mahasiswa as $m)
				<tr>
					<td>{{ $m->NIM }}</td>
					<td>{{ $m->NIM }}</td>
					<td>{{ $m->email }}</td>
					<td>{{ $m->password }}</td>
					<td>{{ $m->ktm }}</td>
					<td>{{ $m->spp }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>
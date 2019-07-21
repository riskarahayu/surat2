@extends('operator.master')

@section('content')
	<table>
		<thead>
			<tr>
				<td>No Surat</td>
				<td>Jenis Surat</td>
				<td>Tanggal Pengajuan</td>
				<td>NIM</td>
				<td>Nama</td>
				<td>Status</td>
			</tr>
		</thead>
		<tbody>
			@foreach($surat as $s)
				<tr>
					<td>{{ $s->no_surat }}</td>
					<td>{{ $s->jenis_surat->nama_jenis_surat }}</td>
					<td>{{ $s->tanggal_pengajuan }}</td>
					<td>{{ $s->nim }}</td>
					<td>{{ $s->user_mahasiswa->mahasiswa->nama }}</td>
					<td>{{ $s->status->nama_status }}</td>
					<td>
						<a href="{{ url('/operator/surat/'.$s->id_surat).'/edit' }}">Edit Status</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
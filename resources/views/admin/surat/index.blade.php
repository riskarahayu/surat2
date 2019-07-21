@extends('admin.master')

@section('content')
	<table>
		<thead>
			<tr>
				<th>No Surat</th>
				<th>Perihal</th>
				<th>Lampiran</th>
				<th>Jenis Surat</th>
				<th>Tanggal Pengajuan</th>
				<th>NIM</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($surat as $s)
				<tr>
					<td>{{ $s->no_surat }}</td>
					<td>{{ $s->perihal }}</td>
					<td>{{ $s->lampiran }}</td>
					<td>{{ $s->jenis_surat->nama_jenis_surat }}</td>
					<td>{{ $s->created_at }}</td>
					<td>{{ $s->nim }}</td>
					<td>{{ $s->status->nama_status }}</td>
					<td><a href="{{  url('/admin/surat/penelitian/'.$s->id_surat) }}">Lihat Detail</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
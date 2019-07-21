@extends('master')

@section('content')
	<h5>Pilih Surat Anda</h5>
    <ul class="collection">
      <li class="collection-item"><a href="/surat/penelitian">Surat Penelitian</a></li>
    </ul>	
    <h5 style="margin-top: 50px">Daftar Surat Yang Telah Diajukan</h5>
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
					<td>{{ $s->created_at }}</td>
					<td>{{ $s->nim }}</td>
					<td>{{ $s->user_mahasiswa->nama }}</td>
					<td>{{ $s->status->nama_status }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
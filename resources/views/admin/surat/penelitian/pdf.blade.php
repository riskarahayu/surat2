<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
	<style type="text/css">
		.table {
			border-collapse: collapse;
			width: 100%;
		}
		.table td, .table th {
			border: 1px solid black;
			text-align: center;
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>
</head>
<body style="font-family: 'arial'" class="background">
	<div style="font-size: 20px; text-align: center; font-weight: bold;">KEMENTRIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</div> 
	<div style="font-size: 16px; text-align: center; font-weight: bold;">
		POLITEKNIK NEGERI SAMARINDA
	</div>
	<br>
	alamat
	<br>
	<div style="border-top: 1px solid black; border-bottom: 2px solid black; height: 1px"></div>

	</v-container>
	<table style="margin-top: 20px;">
		<tr>
			<td>Nomor</td>
			<td>:</td>
			<td>{{ $surat->no_surat }}</td>
		</tr>
		<tr> 
			<td>Lampiran</td>
			<td>:</td>
			<td>{{ $surat->lampiran }}</td>
		</tr>
		<tr>
			<td>Perihal</td>
			<td>:</td>
			<td>{{ $surat->perihal }}</td>
		</tr>
	</table>
	<div style="margin-top: 20px">
		<div>Kepada Yth.</div>
		<div>{{ $nama_perusahaan }}</div>
		<div>{{ $alamat_perusahaan }}</div>
		<div>Di: -- </div>
		<div>Tempat</div>
	</div>

	</div>
	<div style="margin-top: 50px">
		Dengan Hormat
	</div>
	<div style="margin-top: 10px">
		Sehubungan dengan kebutuhan mahasiswa tentang beberapa data untuk {{ $tujuan }}, maka dengan ini kami mohon kepada Bapak/Ibu untuk dapat membantu mahasiswa kami seperti tertera dibawah ini :
	</div>
	<div style="margin-top: 10px">
		<table class="table">
			<thead>
				<tr style="font-size: 12px">
					<th>NO</th>
					<th>NAMA</th>
					<th>NIM</th>
					<th>JURUSAN/PROGRAM STUDI</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>{{ $mahasiswa->nama }}</td>
					<td>{{ $mahasiswa->nim }}</td>
					<td>{{ $mahasiswa->jurusan }}</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div style="margin-top: 10px">Data yang diperlukan :</div>
	<ol>
		@foreach($data as $d)
			<li>{{ $d->nama }}</li>
		@endforeach
	</ol>
	<div style="margin-top: 10px">
		Berkaitan dengan data-data yang bapak/ibu berikan dengan tugas yang dibuat oleh mahasiswa tersebut kami menjamin kerahasiaan data perusahaan/instansi Bapak/Ibu.
	</div>
	<div style="margin-top: 10px">
		Demikian kami sampaikan, atas bantuan dan kerjasamanya kami ucapkan banyak terimakasih
	</div>
	<div style="margin-left: 450px; margin-top: 20px; margin-top: 100px; width: 300px">
		<div>
			<div>Samarinda, 05 April 2019</div>
			<div>Kabag Akademik dan Kemahasiswaan</div>
			<div style="margin-top: 80px">Drs. M Taufan</div>
			<div>NIP. 19631003 198903 1 002</div>
		</div>
	</div>
</body>
</html>
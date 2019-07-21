@extends('admin.master')

@section('content')

  <div class="row">
    <form class="col s12" method='POST'>
    	<div class="row">
        <div class="input-field col s6">
          <input id='no_surat' value='{{ $surat->no_surat }}' disabled="" name='no_surat' type="text" class="validate">
          <label for="no_surat">No Surat</label>
        </div>
        <div class="input-field col s6">
          <input id='no_surat' value="{{ $surat->perihal }}" disabled name='no_surat' type="text" class="validate">
          <label for="no_surat">Perihal</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s6">
          <input id='no_surat' value="{{ $surat->lampiran }}" disabled name='no_surat' type="text" class="validate">
          <label for="no_surat">Lampiran</label>
        </div>
        <div class="input-field col s6">
          <input id='jenis_surat' disabled value="{{ $surat->jenis_surat->nama_jenis_surat }}" name='jenis_surat' type="text" class="validate">
          <label for="jenis_surat">Jenis Surat</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s6">
          <input id='tanggal_pengajuan' disabled value="{{ $surat->created_at }}"  name='tanggal_pengajuan' type="text" class="validate">
          <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
        </div>
		</div>
      <div class="row">
        <div class="input-field col s6">
          <input id='tujuan_surat' disabled value="{{ $surat->surat_penelitian->tujuan_surat }}" name='tujuan_surat' type="text" class="validate">
          <label for="tujuan_surat">Tujuan Surat</label>
        </div>
        <div class="input-field col s6">
          <input id="nama_perusahaan" disabled value="{{ $surat->surat_penelitian->nama_perusahaan }}"  name='nama_perusahaan' type="text" class="validate">
          <label for="nama_perusahaan">Nama Perusahaan/Instansi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="alamat_perusahaan" disabled name='alamat_perusahaan' class="materialize-textarea">{{ $surat->surat_penelitian->alamat_perusahaan }}</textarea>
          <label for="alamat_perusahaan">Alamat Perusahaan</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
            <label>Status</label>
            <select class="browser-default" disabled="">
              <option value="" disabled selected>Choose your option</option>
              @foreach($status as $s)
                <option value="{{ $s->id_status }}" {{ $s->id_status === $surat->id_status ? 'selected' : ''}}>{{ $s->nama_status }}</option> 
              @endforeach
            </select>
        </div>
      </div>
      Data Yang Diperlukan
      <ol>
      	@foreach($surat->surat_penelitian->data as $d)
      		<li>{{ $d->nama }}</li>
      	@endforeach
      </ol>   
      <a class="btn waves-effect waves-light" href="{{ url('/admin/surat/penelitian/'.$surat->id_surat.'/edit') }}">Edit</a>
      <a class="btn waves-effect waves-light" href="{{ url('/admin/surat/penelitian/'.$surat->id_surat.'/pdf') }}">Download</a>
      @csrf
      @method('POST')
    </form>
  </div>

@endsection
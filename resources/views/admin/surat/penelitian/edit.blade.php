@extends('admin.master')

@section('content')

  <div class="row">
    <form class="col s12" method='POST' action="{{ url('/admin/surat/penelitian/'.$surat->id_surat) }}">
    	<div class="row">
        <div class="input-field col s6">
          <input id='no_surat' value='{{ $surat->no_surat }}'  name='no_surat' type="text" class="validate">
          <label for="no_surat">No Surat</label>
        </div>
        <div class="input-field col s6">
          <input id='perihal' value="{{ $surat->perihal }}"  name='perihal' type="text" class="validate">
          <label for="perihal">Perihal</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s6">
          <input id='lampiran' value="{{ $surat->lampiran }}"  name='lampiran' type="text" class="validate">
          <label for="lampiran">Lampiran</label>
        </div>
        <div class="input-field col s6">
          <select class="browser-default" name='id_jenis_surat'>
            <option value=""  selected>Choose your option</option>
              @foreach($jenis_surat as $s)
              <option value="{{ $s->id_jenis_surat }}" {{ $surat->jenis_surat->id_jenis_surat === $s->id_jenis_surat ? 'selected' : ''}}>{{ $s->nama_jenis_surat }}</option> 
            @endforeach
          </select>
        </div>
          
		</div>
		<div class="row">
        <div class="input-field col s6">
          <input id='tanggal_pengajuan'  value="{{ $surat->tanggal_pengajuan }}"  name='tanggal_pengajuan' type="text" class="validate">
          <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
        </div>
		</div>
      <div class="row">
        <div class="input-field col s6">
          <input id='tujuan_surat'  value="{{ $surat->surat_penelitian->tujuan_surat }}" name='tujuan_surat' type="text" class="validate">
          <label for="tujuan_surat">Tujuan Surat</label>
        </div>
        <div class="input-field col s6">
          <input id="nama_perusahaan"  value="{{ $surat->surat_penelitian->nama_perusahaan }}"  name='nama_perusahaan' type="text" class="validate">
          <label for="nama_perusahaan">Nama Perusahaan/Instansi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="alamat_perusahaan"  name='alamat_perusahaan' class="materialize-textarea">{{ $surat->surat_penelitian->alamat_perusahaan }}</textarea>
          <label for="alamat_perusahaan">Alamat Perusahaan</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
            <label>Status</label>
            <select class="browser-default" name='id_status'>
              <option value=""  selected>Choose your option</option>
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
      <button type="submit">Submit</button>
      @csrf
      @method('PUT')
    </form>
  </div>

@endsection
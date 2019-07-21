@extends('operator.master')

@section('content')

  <div class="row">
    <h5 style="text-align: center;">Update Status Surat</h5>
    <form style="margin-top: 20px" class="col s12" method='POST' action="{{ url('/operator/surat/'.$surat->id_surat) }}">
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
          <input id='tanggal_pengajuan' disabled value="{{ $surat->tanggal_pengajuan }}"  name='tanggal_pengajuan' type="text" class="validate">
          <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
        </div>
		</div>
      <div class="row">
        <div class="col s6">
            <label>Status</label>
            <select class="browser-default" name="id_status">
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
      <button type="submit" class="waves-effect waves-light btn"> 
          Update
      </button>
      @csrf
      @method('PUT')
    </form>
  </div>

@endsection
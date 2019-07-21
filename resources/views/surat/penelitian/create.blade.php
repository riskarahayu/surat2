@extends('master')

@section('content')

  <div class="row">
    <form class="col s12" method='POST'>
      <div class="row">
        <div class="input-field col s6">
          <input id='tujuan_surat' value="{{ old('tujuan_surat') }}" name='tujuan_surat' type="text" class="validate">
          <label for="tujuan_surat">Tujuan Surat</label>
        </div>
        <div class="input-field col s6">
          <input id="nama_perusahaan" value="{{ old('nama_perusahaan') }}" name='nama_perusahaan' type="text" class="validate">
          <label for="nama_perusahaan">Nama Perusahaan/Instansi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="alamat_perusahaan" name='alamat_perusahaan' class="materialize-textarea">{{ old('alamat_perusahaan') }}</textarea>
          <label for="alamat_perusahaan">Alamat Perusahaan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="data" name='data' class="materialize-textarea">{{ old('data') }}</textarea>
          <label for="data">Data Yang Diperlukan (Pisahkan Dengan Koma)</label>
        </div>
      </div>     
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
      @csrf
      @method('POST')
    </form>
  </div>

@endsection
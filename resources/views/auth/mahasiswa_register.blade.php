@extends('master')

@section('content')
<center>
     <div class="container">
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">
        <div class="section"></div>
<div class="section"></div>
    
      <div class="section"><i class="mdi-alert-error red-text"></i></div>
      
      <form method='POST' enctype="multipart/form-data">
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='nim' id='email' required />
                <label for='email'>NIM</label>
              </div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='email' id='email' required />
                <label for='email'>Email</label>
              </div>
              <div class='input-field col s12'>
                <input class='validate' type="password" name='password' id='nama' required />
                <label for='nama'>Password</label>
              </div>
            </div>
            <div class='row'>
               <div class='input-field col s12'>
                <input class='validate' type="file" name='ktm' id='nama' required />
                <label for='nama'>KTM</label>
              </div>
              <div class='input-field col s12'>
                <input class='validate' type="file" name='slip_spp' id='nama' required />
                <label for='nama'>SLIP SPP</label>
              </div>
            </div>
            <br/>
            <center>
              <div class='row'>
                <button style="margin-left:65px;"  type='submit' name='btn_login' class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1'>Register</button>
              </div>
            </center>
            @method('POST')
             @csrf
     </form>
        </div>
       </div>
      </center>
@endsection
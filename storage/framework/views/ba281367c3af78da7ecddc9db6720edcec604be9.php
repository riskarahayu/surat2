<?php $__env->startSection('content'); ?>
<center>
     <div class="container">
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">
        <div class="section"></div>
<div class="section"></div>
    
      <div class="section"><i class="mdi-alert-error red-text"></i></div>
      
      <form method='POST'>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='email' id='email' required />
                <label for='email'>Email</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col m12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Password</label>
              </div>
              <label style='float: right;'>
              <a><b style="color: #F5F5F5;">Forgot Password?</b></a>
              </label>
            </div>
            <br/>
            <center>
              <div class='row'>
                <button style="margin-left:65px;"  type='submit' name='btn_login' class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1'>Login</button>
                <a href="/mahasiswa/register">Daftar</a>
              </div>
            </center>
            <?php echo method_field('POST'); ?>
             <?php echo csrf_field(); ?>
     </form>
        </div>
       </div>
      </center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas Akhir\surat\resources\views/auth/mahasiswa_login.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<h4>Pilih Surat Anda</h4>
          <div class="row">
            <div class="col s12 m6">
              <div class="card blue-text">
                <div class="card-content black-text">
                  <span class="card-title">Surat Aktif Kuliah</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">Ajukan</a>
              </div>
            </div>
         </div>
         <div class="col s12 m6">
              <div class="card blue-text">
                <div class="card-content black-text">
                  <span class="card-title">Surat Penelitian</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="<?php echo e(url('/surat/penelitian')); ?>">Ajukan</a>
              </div>
            </div>
         </div>
         <div class="col s12 m6">
              <div class="card blue-text">
                <div class="card-content black-text">
                  <span class="card-title">Surat Pengajuan PKL</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">Ajukan</a>
              </div>
            </div>
         </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas Akhir\surat\resources\views/welcome.blade.php ENDPATH**/ ?>
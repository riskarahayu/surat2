<?php $__env->startSection('content'); ?>

  <div class="row">
    <form class="col s12" method='POST'>
      <div class="row">
        <div class="input-field col s6">
          <input id='tujuan_surat' value="<?php echo e(old('tujuan_surat')); ?>" name='tujuan_surat' type="text" class="validate">
          <label for="tujuan_surat">Tujuan Surat</label>
        </div>
        <div class="input-field col s6">
          <input id="nama_perusahaan" value="<?php echo e(old('nama_perusahaan')); ?>" name='nama_perusahaan' type="text" class="validate">
          <label for="nama_perusahaan">Nama Perusahaan/Instansi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="alamat_perusahaan" name='alamat_perusahaan' class="materialize-textarea"><?php echo e(old('alamat_perusahaan')); ?></textarea>
          <label for="alamat_perusahaan">Alamat Perusahaan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="data" name='data' class="materialize-textarea"><?php echo e(old('data')); ?></textarea>
          <label for="data">Data Yang Diperlukan (Pisahkan Dengan Koma)</label>
        </div>
      </div>     
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
      <?php echo csrf_field(); ?>
      <?php echo method_field('POST'); ?>
    </form>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas Akhir\surat\resources\views/surat/penelitian/create.blade.php ENDPATH**/ ?>
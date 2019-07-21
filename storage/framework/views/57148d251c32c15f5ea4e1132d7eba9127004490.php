<?php $__env->startSection('content'); ?>

  <div class="row">
    <form class="col s12" method='POST'>
    	<div class="row">
        <div class="input-field col s6">
          <input id='no_surat' value='<?php echo e($surat->no_surat); ?>' disabled="" name='no_surat' type="text" class="validate">
          <label for="no_surat">No Surat</label>
        </div>
        <div class="input-field col s6">
          <input id='no_surat' value="<?php echo e($surat->perihal); ?>" disabled name='no_surat' type="text" class="validate">
          <label for="no_surat">Perihal</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s6">
          <input id='no_surat' value="<?php echo e($surat->lampiran); ?>" disabled name='no_surat' type="text" class="validate">
          <label for="no_surat">Lampiran</label>
        </div>
        <div class="input-field col s6">
          <input id='jenis_surat' disabled value="<?php echo e($surat->jenis_surat->nama_jenis_surat); ?>" name='jenis_surat' type="text" class="validate">
          <label for="jenis_surat">Jenis Surat</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s6">
          <input id='tanggal_pengajuan' disabled value="<?php echo e($surat->created_at); ?>"  name='tanggal_pengajuan' type="text" class="validate">
          <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
        </div>
		</div>
      <div class="row">
        <div class="input-field col s6">
          <input id='tujuan_surat' disabled value="<?php echo e($surat->surat_penelitian->tujuan_surat); ?>" name='tujuan_surat' type="text" class="validate">
          <label for="tujuan_surat">Tujuan Surat</label>
        </div>
        <div class="input-field col s6">
          <input id="nama_perusahaan" disabled value="<?php echo e($surat->surat_penelitian->nama_perusahaan); ?>"  name='nama_perusahaan' type="text" class="validate">
          <label for="nama_perusahaan">Nama Perusahaan/Instansi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="alamat_perusahaan" disabled name='alamat_perusahaan' class="materialize-textarea"><?php echo e($surat->surat_penelitian->alamat_perusahaan); ?></textarea>
          <label for="alamat_perusahaan">Alamat Perusahaan</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
            <label>Status</label>
            <select class="browser-default" disabled="">
              <option value="" disabled selected>Choose your option</option>
              <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($s->id_status); ?>" <?php echo e($s->id_status === $surat->id_status ? 'selected' : ''); ?>><?php echo e($s->nama_status); ?></option> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
      </div>
      Data Yang Diperlukan
      <ol>
      	<?php $__currentLoopData = $surat->surat_penelitian->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      		<li><?php echo e($d->nama); ?></li>
      	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ol>   
      <a class="btn waves-effect waves-light" href="<?php echo e(url('/admin/surat/penelitian/'.$surat->id_surat.'/edit')); ?>">Edit</a>
      <a class="btn waves-effect waves-light" href="<?php echo e(url('/admin/surat/penelitian/'.$surat->id_surat.'/pdf')); ?>">Download</a>
      <?php echo csrf_field(); ?>
      <?php echo method_field('POST'); ?>
    </form>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas Akhir\surat\resources\views/admin/surat/penelitian/single.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
	<h5>Pilih Surat Anda</h5>
    <ul class="collection">
      <li class="collection-item"><a href="/surat/penelitian">Surat Penelitian</a></li>
    </ul>	
    <h5 style="margin-top: 50px">Daftar Surat Yang Telah Diajukan</h5>
	<table>
		<thead>
			<tr>
				<td>No Surat</td>
				<td>Jenis Surat</td>
				<td>Tanggal Pengajuan</td>
				<td>NIM</td>
				<td>Nama</td>
				<td>Status</td>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $surat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($s->no_surat); ?></td>
					<td><?php echo e($s->jenis_surat->nama_jenis_surat); ?></td>
					<td><?php echo e($s->created_at); ?></td>
					<td><?php echo e($s->nim); ?></td>
					<td><?php echo e($s->user_mahasiswa->nama); ?></td>
					<td><?php echo e($s->status->nama_status); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas Akhir\surat\resources\views/surat/index.blade.php ENDPATH**/ ?>
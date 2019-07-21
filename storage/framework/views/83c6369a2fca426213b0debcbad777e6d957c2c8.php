<?php $__env->startSection('content'); ?>
	<table>
		<thead>
			<tr>
				<th>No Surat</th>
				<th>Perihal</th>
				<th>Lampiran</th>
				<th>Jenis Surat</th>
				<th>Tanggal Pengajuan</th>
				<th>NIM</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $surat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($s->no_surat); ?></td>
					<td><?php echo e($s->perihal); ?></td>
					<td><?php echo e($s->lampiran); ?></td>
					<td><?php echo e($s->jenis_surat->nama_jenis_surat); ?></td>
					<td><?php echo e($s->created_at); ?></td>
					<td><?php echo e($s->nim); ?></td>
					<td><?php echo e($s->status->nama_status); ?></td>
					<td><a href="<?php echo e(url('/admin/surat/penelitian/'.$s->id_surat)); ?>">Lihat Detail</a></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas Akhir\surat\resources\views/admin/surat/index.blade.php ENDPATH**/ ?>
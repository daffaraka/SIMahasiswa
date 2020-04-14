<?php $__env->startSection("content"); ?>

		<ul>
			<li>Id Mahasiswa : <?php echo e($data->id); ?></li>
			<li>Nama : <?php echo e($data->name); ?></li>
			<li>NIM : <?php echo e($data->nim); ?></li>
			<li>ALamat : <?php echo e($data->address); ?></li>
			<li>File Path : <?php echo e($data->filePath); ?></li>
			 <li><img src="<?php echo e(asset('photo_mhs/'.$data->photo)); ?>" id="showgambar" style="max-width:200px;max-height:200px;" /> </li>
		</ul>

		<button type="button" class="btn btn-success"><a href="<?php echo e(route('biodata.index')); ?>">Kembali</a></button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backend-si\resources\views/biodata/show.blade.php ENDPATH**/ ?>
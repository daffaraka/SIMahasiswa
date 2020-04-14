<?php $__env->startSection('js'); ?>
<script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#inputgambar").change(function () {
        readURL(this);
    });
</script>

<?php $__env->stopSection(); ?>


<?php $__env->startSection("content"); ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

		<form action="<?php echo e(route('biodata.update', ['id'=> $data->id])); ?>" method="POST" class="form-horizontal">

			<?php echo csrf_field(); ?>

			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="name" class="form-control" value="<?php echo e($data->name); ?>">
			</div>
			<div class="form-group">
				<label class="control-label">NIM</label>
				<input type="text" name="nim" class="form-control" value="<?php echo e($data->nim); ?>">
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<textarea name="address" rows="10" class="form-control"><?php echo e($data->address); ?></textarea> 
			</div>
			<div class="form-group">
				<img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" /><?php echo e($data->photo); ?>

			</div><br><br><br><br><br>
			<div class="form-group">
			    <label for="photo">Upload Photo</label><br>
			    <input type="file" id="inputgambar" name="photo" value="<?php echo e($data->photo); ?>">
			  </div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Simpan</button>
				<a href="<?php echo e(route('biodata.index')); ?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ammar\resources\views/biodata/edit.blade.php ENDPATH**/ ?>
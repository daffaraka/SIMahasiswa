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


		<form action="<?php echo e(route('biodata.store')); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">

			<?php echo csrf_field(); ?>

			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="name" class="form-control" >
			</div>
			<div class="form-group">
				<label class="control-label">NIM</label>
				<input type="text" name="nim" class="form-control" >
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<textarea name="address" rows="10" class="form-control"></textarea> 
			</div>
			<div class="form-group">
				<img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
			</div><br><br><br><br><br>

			<div class="form-group">
				<label class="control-label">Foto</label>
				<input type="file" id="inputgambar" name="photo" required="required">
			</div>
			
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Simpan</button>
				<a href="<?php echo e(route('biodata.index')); ?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ammar\resources\views/biodata/create.blade.php ENDPATH**/ ?>
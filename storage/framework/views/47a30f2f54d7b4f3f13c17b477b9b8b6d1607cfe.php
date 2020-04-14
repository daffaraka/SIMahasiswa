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


<?php $__env->startSection('content'); ?>

    <style>
        body {
            background: #f8f8f6;
        }

    </style>


    <div class="body" style="font-family: Century Gothic;">

        <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <h1>Daftar Mahasiswa</h1>
        	<a href="<?php echo e(route('biodata.create')); ?>" class="btn btn-info">Tambahkan</a><br><br>
            <thead><tr>
 	<th>Id</th>
		<th>Name</th>
		<th>NIM</th>
		<th>Address</th>
        <th style="width: 200px">Aksi</th>
    </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
  	<td><?php echo e($data->id); ?></td>
				<td><?php echo e($data->name); ?></td>
				<td><?php echo e($data->nim); ?></td>
				<td><?php echo e($data->address); ?></td>
                    <td>
                       <a href="<?php echo e(route('biodata.show', ['id' => $data-> id])); ?>" class="btn btn-success">Detail</a>
					<a href="<?php echo e(route('biodata.edit', ['id' => $data-> id])); ?>"  class="btn btn-warning">Edit</a>
					<a onclick="return confirm('Apakah Anda Yakin ?');" href="<?php echo e(route('biodata.destroy', ['id' => $data-> id])); ?>"  class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ammar\resources\views/biodata/index.blade.php ENDPATH**/ ?>
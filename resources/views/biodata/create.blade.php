@section('js')
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

@stop

@extends("layout")

@section("content")


		<form action="{{ route('biodata.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

			@csrf

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
				<a href="{{ route('biodata.index')}}" class="btn btn-danger">Batal</a>
			</div>
		</form>
@endsection
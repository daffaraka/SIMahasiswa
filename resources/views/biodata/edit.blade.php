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

    @if($errors->any())
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

		<form action="{{ route('biodata.update', ['id'=> $data->id]) }}" method="POST" class="form-horizontal">

			@csrf

			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="name" class="form-control" value="{{ $data->name }}">
			</div>
			<div class="form-group">
				<label class="control-label">NIM</label>
				<input type="text" name="nim" class="form-control" value="{{ $data->nim }}">
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<textarea name="address" rows="10" class="form-control">{{ $data->address }}</textarea> 
			</div>
				<button class="btn btn-primary" type="submit">Simpan</button>
				<a href="{{ route('biodata.index')}}" class="btn btn-danger">Batal</a>
			</div>
		</form>
@endsection
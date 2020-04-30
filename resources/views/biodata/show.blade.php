@extends("layout.app")
@section("content")
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Lihat Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kelola Mahasiswa Ku</a></li>
              <li class="breadcrumb-item active">Tambah Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul style="margin-right: 20px;">
						<label class="control-label">ID</label>
						<li class="form-control"> {{  $data->id }}</li>
						 <label class="control-label">Nama</label>
						<li class="form-control">Nama : {{  $data->name }}</li>
						 <label class="control-label">NIM</label>
						<li class="form-control">NIM : {{  $data->nim }}</li>
						 <label class="control-label">Alamat</label>
						<li class="form-control">ALamat : {{  $data->address }}</li>
						 <!-- 
						<li class="form-control">File Path : {{ $data->filePath}}</li> -->
					</ul>

						<button type="button" class="btn btn-default" style="float:right; margin-right: 20px;"><a href="{{ route('biodata.index') }}">Kembali</a></button>

				</div>
			</div>
		</div>
	</section>

		
@endsection
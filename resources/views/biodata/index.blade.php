@extends("layout.app")

@push("style")

		 <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  		 <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section("content")
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Mahasiswa</h1>
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
					  <h1 style="text-align: center;">Daftar Orang</h1>
            <a href="/biodata-mahasiswa/create" class="btn btn-info"> + Tambah Data</a>
            <a href="/biodata-mahasiswa/export_excel" class="btn btn-info" target="_blank">Export Excel</a>
            <br><br>

 				
 				{!! $html->table() !!}

				</div>
			</div>
		</div>
	</section>

  

@endsection

@push("script")
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    {!! $html->scripts() !!}
@endpush
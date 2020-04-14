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
@extends('layout')

@section('content')

    <style>
        body {
            background: #f8f8f6;
        }

        .datatable {
            
        }

    </style>


    <div class="body" style="font-family: Century Gothic;">

        <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <h1>Daftar Mahasiswa</h1>
        	<a href="{{ route('biodata.create') }}" class="btn btn-info">Tambahkan</a><br><br>
            <thead><tr>
 	<th>Id</th>
		<th>Name</th>
		<th>NIM</th>
		<th>Address</th>
        <th style="width: 200px">Aksi</th>
    </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $data)
                <tr>
  	<td>{{  $data->id }}</td>
				<td>{{  $data->name }}</td>
				<td>{{  $data->nim }}</td>
				<td>{{  $data->address }}</td>
                    <td>
                       <a href="{{ route('biodata.show', ['id' => $data-> id]) }}" class="btn btn-success">Detail</a>
					<a href="{{ route('biodata.edit', ['id' => $data-> id]) }}"  class="btn btn-warning">Edit</a>
					<a onclick="return confirm('Apakah Anda Yakin ?');" href="{{ route('biodata.destroy', ['id' => $data-> id]) }}"  class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('content')

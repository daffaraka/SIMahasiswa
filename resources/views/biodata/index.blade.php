@extends("layout")

@push("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.css"/>
@endpush

@section("content")
    <h1 style="text-align: center;">Daftar Orang</h1>
            <a href="/biodata-mahasiswa/create" class="btn btn-info"> + Tambah Data</a>
            <a href="/biodata-mahasiswa/export_excel" class="btn btn-info" target="_blank">Export Excel</a>
            <br><br>
    {!! $html->table() !!}


@endsection

@push("script")
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.js"></script>
    {!! $html->scripts() !!}
@endpush
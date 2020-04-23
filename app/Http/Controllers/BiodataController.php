<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BiodataMahasiswa;
use DataTables;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateBiodata;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


use DB;
class BiodataController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth']);
    }

public function index(Builder $builder)
    {
      if (request()->ajax()) {
        return DataTables::of(BiodataMahasiswa::query())->editColumn("nim",function($data){
            return "<strong><i>". $data->nim .
            "</i></strong>" ;

        })->addColumn("aksi", function($data) {
             return "
                <a href='" . route("biodata.show", ["id" => $data->id]) ."' class='btn btn-success'>Detail</a>
                <a href='" . route("biodata.edit", ["id" => $data->id]) ."' class='btn btn-warning'>Edit</a>
                <a href='" . route("biodata.destroy", ["id" => $data->id]) ."' class='btn btn-danger'>Delete</button>
                ";
            })->rawColumns(["nim", "aksi"])->addINdexColumn()->toJson();
    

    }
     

    $html = $builder->columns([
        ['data' => 'DT_RowIndex', 'name' => '#', 'title' => 'ID', "defaultContent"=> "", "orderable" => false],
        ['data' => 'name', 'name' => 'name', 'title' => 'NAMA'],
        ['data' => 'nim', 'name' => 'nim', 'title' => 'NIM'],
        ['data' => 'address', 'name' => 'address', 'title' => 'Alamat'],
        [       
                'defaultContent' => '',
                'data'           => 'aksi',
                'name'           => 'aksi',
                'title'          => 'ACTION',
                'render'         => null,
                'orderable'      => false,
                'searchable'     => false,
                'exportable'     => false,
                'printable'      => true,
            ],
        ]);

        return view('biodata.index', compact('html'));
    }

    public function create(){
        return view("biodata.create");
    }
    public function store(Request $request){
    	// dd($request->file());


        $mahasiswa = new BiodataMahasiswa;
        $mahasiswa->name = $request->name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->address = $request->address;
        // $mahasiswa->photo = $photo_mhs;
        // $mahasiswa->filePath = $filePath;


        $mahasiswa->save();

        // $filePath = $request->file("photo")->store("photo_mhs");
        // return $filePath;
        return redirect()->route("biodata.index");
    }

    public function edit($id){
    	$data = BiodataMahasiswa::find($id);
        return view("biodata.edit", compact("data"));
    }

    public function update(UpdateBiodata $request, $id) {
        // $validation = Validator::make($request->all(), [
        //     "name" => "string|min:3|max:10|alpha",
        //     "nim" => "string|min:8",
        //     "alamat" => "string|min:10",
        // ]);

        // if ($validation->fails()) {
        //     return redirect()->back()->withErrors($validation)->withInput();
        // }

        BiodataMahasiswa::where("id", $id)->update($request->except("_token", "_method"));
        return redirect()->route("biodata.index");
    }

    public function destroy($id){
        $data = BiodataMahasiswa::where("id", $id)->delete();
        return redirect()->route("biodata.index");
        
    }

    public function show($id){
        // where("id", $id)->first();
        $data = BiodataMahasiswa::find($id);
        // dd($data->)
        return view("biodata.show", compact("data"));
        // return response()->json($data); dalam bentuk json
    }

    public function export_excel()
    {
        return Excel::download(new MahasiswaExport, 'simahasiswa.xlsx');
    }
}

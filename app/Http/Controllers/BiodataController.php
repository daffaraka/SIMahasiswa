<?php

namespace App\Http\Controllers;
use App\BiodataMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateBiodata;
class BiodataController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
    	$mahasiswa = BiodataMahasiswa::all();
        // dd(BiodataMahasiswa::)
    	return view("biodata.index", compact("mahasiswa"));
    }
    public function create(){
        return view("biodata.create");
    }
    public function store(Request $request){
    	// dd($request->file());
        $filePath = $request->file("photo")->store("photo_mhs");
        $photo_mhs = 'products-' .date('Ymdhis').'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move('photo_mhs', $photo_mhs);


        $mahasiswa = new BiodataMahasiswa;
        $mahasiswa->name = $request->name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->address = $request->address;

        $mahasiswa->photo = $photo_mhs;
        $mahasiswa->filePath = $filePath;


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
}

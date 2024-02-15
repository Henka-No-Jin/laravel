<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KelasLengkap;
use App\Models\Student;

use Illuminate\Http\Request;

class KelasLengkapController extends Controller
{

    public function create() {
        return view ('kelas.create', [
            'title' => 'Add Data',
        ]);
    }
    
    public function index(){
        return view ('kelas.all', [
            "title" => "Kelas",
            "kelas" => KelasLengkap::all(),
        ]);
    }

    public function show($kelas){
        return view ("kelas.detail", [
            "title"=> "detail-kelas",
            "kelas" => KelasLengkap::find($kelas),
        ]);
    }


    public function dashboard($kelas){
        return view ("dashboard.kelas", [
            "title"=> "detail-kelas",
            "kelas" => KelasLengkap::find($kelas),
        ]);
    }


    public function store(Request $request){
        $validateData = $request->validate([
            "kelas" => "required|max:255",
        ]);

        $result = KelasLengkap::create($validateData);

        if($result) {
            return redirect('/dashboard/index')->with('success', 'Data siswa berhasil ditambahkan');
        }
    }

    public function destroy(KelasLengkap $kelas){
        $result = KelasLengkap::destroy($kelas -> id);

        if($result) {
            return redirect('/dashboard/index')->with('success', 'Data siswa berhasil dihapus');
        }
    }

    public function edit(KelasLengkap $kelas) {
        return view('kelas.edit', [
            "title" => "edit-data",
            "kelas" => $kelas
        ]);
    }

    public function update(Request $request, KelasLengkap $kelas){
        $validateData = $request->validate([
            "kelas" => "required|max:255",
        ]);

        $result = KelasLengkap::where('id', $kelas ->id)-> update($validateData);

        if($result) {
            return redirect('/dashboard/index')->with('success', 'Data siswa berhasil diubah');
        }
    }

}

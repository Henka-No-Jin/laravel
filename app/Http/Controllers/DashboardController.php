<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\KelasLengkap;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function show($student){
        return view ("dashboard.detail", [
            "title"=> "detail-student",
            "student" => Student::find($student),
        ]);
    }

    public function index(){
    $students = Student::all();
    $userName = User::first()->name;

    return view('dashboard.index', [
        'title' => 'Dashboard',
        'students' => $students,
        'userName' => $userName,
        "kelas" => KelasLengkap::all(),
    ]);
    }

    public function create() {
        return view ('dashboard.create', [
            'title' => 'Add Data',
            "grade" => KelasLengkap::all(),
        ]);
    }

    public function grade(){
        $userName = User::first()->name;

        return view ('/dashboard/grade', [
            'title' => 'Kelas',
            'userName' => $userName,
            "kelas" => KelasLengkap::all(),
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            "nis" => "required|max:255",
            "nama" => "required|max:255",
            "tanggal_lahir" => "required",
            "kelas_id" => "required",
            "alamat" => "required",
        ]);

        $result = Student::create($validateData);

        if($result) {
            return redirect('/dashboard/index')->with('success', 'Data siswa berhasil ditambahkan');
        }
    }

    public function destroy(Student $student){
        $result = Student::destroy($student -> id);

        if($result) {
            return redirect('/dashboard/index')->with('success', 'Data siswa berhasil dihapus');
        }
    }

    public function edit(Student $student) {
        return view('dashboard.edit', [
            "title" => "edit-data",
            "student" => $student,
            "grade" => KelasLengkap::all(),
        ]);
    }

    public function update(Request $request, Student $student){
        $validateData = $request->validate([
            "nis" => "required|max:255",
            "nama" => "required|max:255",
            "tanggal_lahir" => "required",
            "kelas_id" => "required",
            "alamat" => "required",
        ]);

        $result = Student::where('id', $student ->id)-> update($validateData);

        if($result) {
            return redirect('/dashboard/index')->with('success', 'Data siswa berhasil diubah');
        }
    }
}

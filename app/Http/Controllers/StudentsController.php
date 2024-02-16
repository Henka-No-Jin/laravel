<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KelasLengkap;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentsController extends Controller
{    
    public function index(){
        return view ('student.all', [
            "title" => "Students",
            "students" => Student::all(),
        ]);
    }

    public function show($student){
        return view ("student.detail", [
            "title"=> "detail-student",
            "student" => Student::find($student),
        ]);
    }

}

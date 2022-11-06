<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Menampilkan seluruh data siswa
    public function index()
    {
        // $user = [
        //     'nama' => 'Muhammad ihsan',
        //     'jurusan' => 'teknik informatika'
        // ];
        $student = Student::all();

        $data = [
            "message" => 'Get all student',
            'data' => $student,
        ];

        return response()->json($data,200);
    }

    # Menambahkan data resource
    public function store(Request $request){
        #Menangkap data request

        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];

        $student = Student::create($input);

        $data = [
            'message' => 'Student is created successfully',
            'data' => $student,
        ];

        return response()->json($data,201);
    }

    public function update(Request $request){
        $student = Student::findOrFail($request->id);

        $student->update($request->all());

        $data = [
            'message' => 'Student is Updated successfully',
            'data' => $student
        ];

        return response()->json($data, 200);
    }


    public function destroy(Request $request)
    {
        $student = Student::findOrFail($request->id);

        $student->delete();

        $data = [
            'message' => 'Student is deleted successfully'
        ];

        return response()->json($data,200);
    }
}

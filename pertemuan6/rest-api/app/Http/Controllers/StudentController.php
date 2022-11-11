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

        # input request kondisi
         $request->validate([
             'nama' => 'required',
             'nim' => 'required',
             'email' => 'required',
             'jurusan' => 'required',
            ]);
            
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
 
     
     public function update(Request $request, $id)
     {
         $student = Student::find($id);
 
         if ($student) {
             $input = [
                 'nama' => $request->nama ?? $student->nama,
                 'nim' => $request->nim ?? $student->nim,
                 'email' => $request->email ?? $student->email,
                 'jurusan' => $request->jurusan ?? $student->jurusan,
             ];
 
             #Melakukan update data
             $student->update($input);
             
             $data = [
                 'message' => 'Student is updated',
                 'data' => $student
             ];
             
             # mengembalikan data json dan kode 200
             return response()->json($data, 404);
         } else {
             $data = [
                 'message' => 'Student not found'
             ];
 
             return response()->json($data, 404);
         }
     }
     
     
     public function destroy($id) {
         $student = Student::find($id);
         
         if($student) {
             $student->delete();
             
             $data = [
                 'message' => 'Students is deleted'
             ];
             
             return response()->json($data,200);
         } else {
             $data = [
                 'message' => 'Student not found'
             ];
             
             return response()->json($data,404);
         }
     }
     
     public function show($id){
         # cari id student yang ingin didapatkan
         $student = Student::find($id);
         
         if($student){
             $data = [
                 'message' => 'Get detail student',
                 'data' => $student,
             ];
             # Mengembalikan data json dan kode 200
             return response()->json($data,200);
         } else {
             $data = [
                 'message' => 'Student not found',
             ];
     
             #mengembalikan data json dam kode 404
             return response()->json($data, 404);
         }
     }
     }

<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;


use Illuminate\Http\Request;
use App\Models\Student;

class DataController extends Controller
{
    // to read data in data page
    public function data(){
        
        $student = Student::all();
        return view('data',compact(['student']));
    }
    
    // to read data in dashboard page
    public function dashdata(){
        $totalStudent = Student::all();
        $student = Student::paginate(10);
        return view('dashboard',compact(['student','totalStudent']));
    }
    
    // to Insert Student Data
    public function insert()
    {
        return view('insert');
    }

    public function store(request $request)
    {
        $this->validate($request, [
            'student_name'=>'required',
            'nim'=> 'required',
            'nilai'=>'required',
            'kelas'=>'required',
        ], [
            'student_name.required'=> 'Nama Wajib Diisi',
            'nim.required'=> 'NIM Wajib Diisi',            
            'nilai.required'=>'IPK Wajib Diisi',
            'kelas.required'=>'Kelas Wajib Diisi',
            
        ]);
        Student::create([
            
            'student_name'=>$request->student_name,
            'nim'=>$request->nim,
            'gender'=>$request->gender,
            'nilai'=>$request->nilai,
            'kelas'=>$request->kelas,

            
        ]);
        return redirect()->route('data');
    }

    // to Edit Student Data
    public function edit(Student $student){
        return view('editsiswa' , compact( 'student'));   
    }
    
    public function update(Student $student, Request $request){
        
        $this->validate($request, [
            'student_name'=>'required',
            'nim'=> 'required',
            'nilai'=>'required',
            'kelas'=>'required',
        ], [
            'student_name.required'=> 'Nama Wajib Diisi',
            'nim.required'=> 'NIM Wajib Diisi',            
            'nilai.required'=>'IPK Wajib Diisi',
            'kelas.required'=>'Kelas Wajib Diisi',
            
        ]);
        $student->update([    
            'student_name'=>$request->student_name,
            'nim'=>$request->nim,
            'gender'=>$request->gender,
            'nilai'=>$request->nilai,
            'kelas'=>$request->kelas,
            
        ]);

        return redirect()->route('data');
    }

    // to Export Student Data
    public function studentExport(){
        return excel::download(new StudentExport, 'Student.xlsx');
    }
    
    // to Import Student Data
    public function studentImport(Request $request){
        $file =$request->file('file');
        $namaFile = $file->getClientOriginalName();

        $file->move('DataStudent', $namaFile);
        
        Excel::import(new StudentImport, public_path('/DataStudent/'.$namaFile));
        
        return redirect()->route('data');
    }


    //to delete student data
    public function destroy(Student $student){
        
        $student->delete();

        return redirect()->back();
    }
}
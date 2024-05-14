<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController
{
    /**
     * Display a listing of the resource.
     */
    private $columns=['StudentName','age'];
    public function index()
    {
        $student=Student::get();
      return view ('Students',compact('student')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('addStudent');  //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //  $student=new Student();
      //$student->StudentName = $request->StudentName;
      //$student->age= $request->age;
      //$student->save();
     Student::create($request->only($this->columns));
      return redirect('Students');//
     
     // return 'Inserted Successfully';
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
    return view('showStudent',compact('student'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('editStudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::where ('id',$id)->update($request->only($this->columns));
        return redirect('Students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
       Student::where ('id',$id)->delete();
        return redirect('Students');
    }
}

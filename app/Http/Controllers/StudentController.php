<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;



class StudentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students =Student::get();
      return view ('Students',compact('students')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('addStudent');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
     $messages =$this->errmsg();
     $data = $request->validate([
       'StudentName'=>'required|max:100|min:5',
       'age'=>'required|max:100',
       'city'=>'required|max:30',
       'image'=>'required',
       'active'=>'required|max:2,',$messages] );

      $imgExt = $request->image->getStudentOriginalExtention(); 
      $fileName = time() .'.'. $imgExt;
      $path='assets/images';
      $request->image->move($path,$fileName);
      $data['image']=$fileName;
      $data['active']= isset($request->active);
     Student::create($data);
      return redirect('Students');
  
    }

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

    public function update(Request $request,string $id)
    {
     // $messages =$this->errmsg();
    //   //$imgExt = $request->image->getClientOriginalExtention();
    //   //$fileName = time() .'.'.$imgExt;
    //   $path='assets'.'images';
    //  // $request->image->move($path,$fileName);
    //  // $data['image']=$fileName;

     $data = $request->validate([
        
            'StudentName'=>'required|max:100|min:5',
            'age'=>'required|max:100',
            'city'=>'required|max:30',
            'image'=>'required',
            'active'=>'required|max:2,'
     
           ] );
      
        Student ::where('id',$id)->update ($data);
        return redirect('Students')->with('success', 'User updated successfully!');
    }

    public function trash ()
    {
      $trashed =  Student::onlyTrashed()->get();
  
      return view('trashStudent',compact('trashed'));
    }

    public function restore (string $id)
    {
      Student:: where ('id',$id)->restore();
      return redirect('Students');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
       Student::where ('id',$id)->delete();
        return redirect('Students');
    }
    public function forceDeleteStudent(Request $request)
    {
     $id = $request->id;
     Student::where ('id',$id)->forceDelete();
     return redirect('trashStudent');
    }


    public function errMsg(){
      return[
        'StudentName.required'=>'The student name is missed,please insert' ,
        'StudentName.min'=> 'length less than 5 , please insert more chars',
  
  
    ];
    
}
}
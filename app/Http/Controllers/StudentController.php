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
    private $columns=['StudentName','age'];
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
      //  $student=new Student();
      //$student->StudentName = $request->StudentName;
      //$student->age= $request->age;
      //$student->save();
     //Student::create($request->only($this->columns));
     
     $data = $request->validate([
       'StudentName'=>'required|max:100|min:5',
       'age'=>'required|max:2',

      ] );
     Student::create($data);
      return redirect('Students');//
     
     // return 'Inserted Successfully';
        //
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

    public function update(Request $request,student $student)
    {
        // Define validation rules
        $rules = [
            'name' => 'required|string|max:50',
            'age' => 'required|integer|max:2',
        ];

        // Validate the request
        $validatedData = $request->validate($rules);

        // Update the user with validated data
    $student->update($validatedData);

        // Redirect with a success message
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


   



//     public function update(request $request,student $student)
//     { 
//         $validatedData=$request->validate([
//             'StudentName'=>'required|string|max:50',
//             'age'=>'required|integer|max:2'. $student->id,
//         ]);
    
//         $student->update($validatedData);
//         return redirect('Students')->route('studentupdate')->with('success', 'User updated successfully!');
       


// }
    
   
// public function update(Request $request, string $id)

//     {
//      $student= Student::findOrFail($id);


//     $validator = Student::make($request->all(
//      [
//     'StudentName'=>'required|max:100|min:5',
//     'age'=>'required|min:11'.$id,
//     ]));
//     return view('editStudent');

     
    
//     }

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

}
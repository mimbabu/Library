<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
      { $students = student::all();
        return view('students.index')->with('students', $students);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input =  $request->all();
        // Student::create($input);
        // return redirect('student')->with('flash_massage', 'Book added successfully');
        
        $requestData = $request->all();
        $fileName= time().$request->file('file_path')->getClientOriginalName();
        $path = $request->file('file_path')->storeAs('images', $fileName,'public');
        $requestData["file_path"] = '/storage/' .$path;
        Student::create($requestData);
        return redirect('student')->with('flash_message', 'Employee Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student= Student::find($id);
        return view("students.show")->with("students" , $student);
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student= Student::find($id);
        return view("students.edit")->with("students" , $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student =  Student::find($id);
        $input =$request->all();
        $student->update($input);
        return redirect('student')->with('flash_massage', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_massage', 'Book Deleted successfully');
    }
}

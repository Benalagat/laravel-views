<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
// use Illuminate\view\view;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Student::create($input);
        return redirect('students')->with('success','Student Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);
        return view('students.show')->with('students',$student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $student = Student::findOrFail($id);
            return view('students.edit', compact('student'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id); // Find the student by ID or throw a 404 error if not found
        $input = $request->all();
        $student->update($input); // Update the student with the new input data
        return redirect()->route('students.index')->with('success', 'Student updated successfully'); // Redirect to the index page with a success message
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return view('students.index')->with('message','deleted successfully');
    }
}

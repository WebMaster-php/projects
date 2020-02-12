<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //echo $request->file('image');exit();
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'regno'    =>   $request->regno,
            'name'    =>   $request->name,
            'father_name'     =>  $request->father_name,
            'phone_no'     =>  $request->phone_no,
            'birthday'     =>   $request->birthday,
            'gender'     =>   $request->gender,
            'image'         =>  $new_name
        );
       
        Student::create($form_data);

        return view('admin.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //Find the Student
       $student=Student::where('regno', $id)->get()->toArray();
       return view('admin.edit_student',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->input('regno');
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        //$student=Student::where('regno', $id)->get();
        Student::where('regno', $id)->update([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'phone_no' => $request->phone_no,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'image' => $new_name,
            ]);
        return view('admin.index')->with('success', 'Data Added successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //Retrieve the Student
        Student::where('regno', $id)->delete();
      return redirect()->back()->with('sucess', 'Deleted Successfully');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

const STUDENTS = '/students';
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
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
        $request->validate([
            'matricnum'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'citizenship'=>'required',
            'religion'=>'required',
            'active'=>'required',
            'years'=>'required',
            'ic'=>'required',
            'email'=>'required'
        ]);
        $students = new Students([
            'matricnum' => $request->get('matricnum'),
            'name' => $request->get('name'),
            'gender' => $request->get('gender'),
            'dob' => $request->get('dob'),
            'citizenship' => $request->get('citizenship'),
            'religion' => $request->get('religion'),
            'active' => $request->get('active'),
            'years' => $request->get('years'),
            'ic' => $request->get('ic'),
            'email' => $request->get('email')
        ]);
        $students->save();
        return redirect(STUDENTS)->with('success', 'Student Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Students::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Students::find($id);
        return view('students.edit', compact('students'));  
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
        $request->validate([
            'matricnum'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'citizenship'=>'required',
            'status'=>'required',
            'religion'=>'required',
            'active'=>'required',
            'years'=>'required',
            'ic'=>'required',
            'email'=>'required'
        ]);
        $students = Students::find($id);
        $students->first_name =  $request->get('matricnum');
        $students->last_name = $request->get('name');
        $students->email = $request->get('gender');
        $students->email = $request->get('dob');
        $students->email = $request->get('citizenship');
        $students->email = $request->get('religion');
        $students->email = $request->get('active');
        $students->email = $request->get('years');
        $students->email = $request->get('ic');
        $students->email = $request->get('email');

        $students->save();
        return redirect(STUDENTS)->with('success', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::find($id);
        $students->delete();
        return redirect(STUDENTS)->with('success', 'Student Deleted!');
    }
}
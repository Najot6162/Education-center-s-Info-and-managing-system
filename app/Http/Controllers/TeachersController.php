<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search']??"";
        $data['teachs'] = Teacher::orderBy('id','asc')->where('teacher_name', 'LIKE', "%$search%")->paginate(5);
        $data1['search'] = $search;
        return view('teachers.index', $data, $data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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
            'teacher_name' => 'required',
            'teacher_certificate' => 'required',
            'teacher_subject' =>'required'
        ]);

        $teacher = new Teacher;
        $teacher->teacher_name = $request->teacher_name;
        $teacher->teacher_subject = $request->teacher_subject;
        $teacher->teacher_certificate=$request->teacher_certificate;

        $teacher->save();

        return redirect()->route('teachs.index')
            ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teach
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teach)
    {
        return view('teachers.edit',compact('teach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'teacher_name' => 'required',
            'teacher_certificate' => 'required',
            'teacher_subject' =>'required'
        ]);

        $teacher = Teacher::find($id);
        $teacher->teacher_name = $request->teacher_name;
        $teacher->teacher_subject = $request->teacher_subject;
        $teacher->teacher_certificate=$request->teacher_certificate;
        $teacher->save();

        return redirect()->route('teachs.index')
            ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teach)
    {
        $teach->delete();

        return redirect()->route('teachs.index')
            ->with('success','Post has been deleted successfully');
    }
}

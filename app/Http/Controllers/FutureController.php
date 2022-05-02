<?php

namespace App\Http\Controllers;

use App\Models\Future;
use Illuminate\Http\Request;

class FutureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search']??"";
        $data['futures'] = Future::orderBy('id','asc')->where('course_name', 'LIKE', "%$search%")->paginate(5);
        $data1['search'] = $search;
        return view('futures.index', $data, $data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('futures.create');
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
            'course_name' => 'required',
            'course_description' => 'required',
            'course_price' =>'required'
        ]);

        $course = new Future;
        $course->course_name = $request->course_name;
        $course->course_description = $request->course_description;
        $course->course_price=$request->course_price;

        $course->save();

        return redirect()->route('futures.index')
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
     * @param  \App\Future  $future
     * @return \Illuminate\Http\Response
     */
    public function edit(Future $future)
    {
        return view('futures.edit',compact('future'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Future  $future
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required',
            'course_description' => 'required',
            'course_price' =>'required'
        ]);

        $course = Future::find($id);
        $course->course_name = $request->course_name;
        $course->course_description = $request->course_description;
        $course->course_price=$request->course_price;
        $course->save();

        return redirect()->route('futures.index')
            ->with('success','Post updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Future  $future
     * @return \Illuminate\Http\Response
     */
    public function destroy(Future $future)
    {
        $future->delete();

        return redirect()->route('futures.index')
            ->with('success','Post has been deleted successfully');
    }
}

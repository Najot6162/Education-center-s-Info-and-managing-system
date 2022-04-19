<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::orderBy('id','asc')->paginate(5);

        return view('admin/admin-event', $data);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:posts',
            'subject' => 'required',
            'message' => 'required',
            'phone' => 'required|unique:posts',
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required and Unique',
            'subject.required' => 'Subject is required',
            'phone.required' => 'Phone is required and Unique',
            ]);
        $post = new Post;
        $post->name = $request->name;
        $post->email=$request->email;
        $post->subject=$request->subject;
        $post->message=$request->message;
        $post->phone=$request->phone;
        $post->save();

        return view('admin/admin-event')
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return view('admin/admin-event')
            ->with('success','Student has been deleted successfully.');
    }
}

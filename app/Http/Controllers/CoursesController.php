<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Future;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['futures'] = Future::orderBy('id','desc')->paginate(5);
        $data1['courses'] = Course::orderBy('id','desc')->paginate(5);

        return view('pages/course', $data,$data1);
    }
}

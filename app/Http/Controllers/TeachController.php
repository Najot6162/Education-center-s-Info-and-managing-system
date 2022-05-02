<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Future;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachController extends Controller
{

    public function index()
    {
        $data['teachers'] = Teacher::orderBy('id','desc')->paginate(5);

        return view('pages.teachers', $data);
    }
}

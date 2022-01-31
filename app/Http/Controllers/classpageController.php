<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class classpageController extends Controller
{
    public function index()
    {
        $courses = course::all();

        return view('classpage', ['courses' => $courses]);
    }

    public function classdetail($id)
    {
        // $courses = course::all();
        $course = course::find($id);

        return view('classdetail', ['course' => $course]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TutorDetail;
use Illuminate\Http\Request;

class SpeakerCampController extends Controller
{
    public function index()
    {
        $speakers = TutorDetail::all();

        return view('speaker/speakerlearning', ['speakers' => $speakers]);
    }

    public function speakerProfile($id)
    {
        // $courses = course::all();
        $speaker = TutorDetail::find($id);

        return view('speaker/profile', ['speaker' => $speaker]);
    }
}

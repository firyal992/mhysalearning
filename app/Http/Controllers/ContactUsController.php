<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{

    public function create() {
        return view('contactusnew');
    }

    public function store(Request $request) {
        $request->validate([
            'fullname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactUs::create($request->all());

        return redirect()->back()->with('success', 'Thank you for the feedback!'); 

    }
}

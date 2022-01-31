<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Auth;
class ProductController extends Controller
{
    
    public function create()

    {
       return view('speaker/book');
    }


    public function store(Request $request)

    {
        
        $order =new Order();
        $order->date=$request->input('date');
        $order->start_time=$request->input('start_time');
        $order->end_time=$request->input('end_time');
        $order->acara=$request->input('acara');
        $order->detail_event=$request->input('detail_event');
        $order->topic=$request->input('topic');
        Auth::user()->orders()->save($order);


        return redirect()->back()->with('success'); 
    }

    
}

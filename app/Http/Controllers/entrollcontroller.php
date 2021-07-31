<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\allcourse;
use App\Models\schedule;
use Laravel\Cashier\Cashier;
use Stripe;

class entrollcontroller extends Controller
{
    //
    
    public function all_entrollment()
    {
        return view('admin.all_entrollment');
    }

    public function addOrder(Request $req)
    {
        return view('admin.addOrder');
    }


// api_call_code_functionality_start_to_here
public function get_all()
{
    $allcourse = allcourse::get();
    return $allcourse;
}

public function get_course($id)
{
    $allcourse = allcourse::where('id',$id)->get();
    return $allcourse;
}

public function search(Request $req)
{
    $allcourse = allcourse::select('course_name')->where('course_name',$req->name)->get();
    return $allcourse;
}

public function edit_course($id){
    $allcourse = allcourse::where('id',$id)->get();
    $schedule = schedule::where('course_id',$id)->get();
    return $allcourse;
    return $schedule;
}
// api_call_code_functionality_end_to_here

public function payment(Request $req)
    {
        \Stripe\Stripe::setApiKey('sk_test_51IdrScSJPzTLNZk88vzAHEQgfAXxTxAoFJmRRUDUJmMjHHBnj4BLvbZn6LNmxbBO32InQXvMsVld5QUrwg24cQeL009hSnLT7w');
            \Stripe\Charge::create ([
                    "amount" => 1995*100,
                    "currency" => "INR",
                    'source' => 'tok_mastercard',
                    "description" => "Knowlogy course subscriptions.",
            ]);
        // return $req->all();
    }
   
}   

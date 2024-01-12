<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function formSubmit(Request $request){
        Mail::to('vrisaindia@gmail.com')->send(new Enquiry($request->email, $request->name, $request->serviceType, $request->message));
        return response()->json(['message' => 'Thank you for reaching us Our Customer Executive will Contact you Soon!'], 200);
    }
}

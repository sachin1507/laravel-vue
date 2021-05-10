<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class ContactFormController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        /*
          Add mail functionality here.
        */

        $data = array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           //'phone' => $request->get('phone'),
           //'subject' => $request->get('subject'),
           'message' => $request->get('message')
	    );
	 
	    //$from_email = Config::get('constants.emails.from_email');
	    //$to_email = Config::get('constants.emails.to_email');
	    $from_email = "hello@clausematics.com"; 
	    $to_email = "thabu.siwedi@gmail.com";
	    $cc_email = "sachin.gupta@infostride.com";  

	    Mail::send('layouts.email', ['mail_data' => $data], function ($message) use($from_email, $to_email, $cc_email) {
	    $message->from($from_email, 'Clause Matics');
	    $message->to($to_email)->cc($cc_email)->subject('Clause Matics Contact Form');
	  }); 

      return response()->json(null, 200);
    }
}

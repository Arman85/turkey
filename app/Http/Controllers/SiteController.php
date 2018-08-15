<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\SendMail;

class SiteController extends Controller
{
    //
    public function index ()
    {
    	return view('frontend.index');
    }

    public function sendmail( Request $request )
    {
    	$this->validate( $request, [
    		'name' => 'required | max:255',
    		'phone' => 'required | numeric'
    	] );

    	$data = [
    		'name' => $request->name,
    		'phone' => $request->phone
    	];

    	//dd($data);

    	$mailsend = Mail::to(env('MAIL_TO'))->send( new SendMail( $data ) );

    	if( $mailsend )
    	{
    		return 1;
    	}
    }
}

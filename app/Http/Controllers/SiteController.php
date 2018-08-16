<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\SendMail;
use App\Turk;
use App\Hotel;

class SiteController extends Controller
{
    //
    public function index ()
    {
        $turkeys = Turk::all();
        $hotels = Hotel::all();
        //dd($turkeys);
    	return view('frontend.index', compact('turkeys', 'hotels'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\ContactUs;
use App\Webinfo;

class ContactUSController extends Controller
{
	public function contactUSPost(Request $request){

		$info = Webinfo::first();

		$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = [];

	    $contact['name'] = $request->name;
	    $contact['email'] = $request->email;
	    $contact['subject'] = $request->subject;
	    $contact['message'] = $request->message;
	    $contact['to'] = $info->web_correo;

	    $mensaje = new ContactUs();
	    $mensaje->name = $request->name;
	    $mensaje->email = $request->email;
	    $mensaje->subject = $request->subject;
	    $mensaje->message = $request->message;
	    $mensaje->save();

	    //Mail::to($contact['to'])->send(new ContactEmail($contact));

	    return redirect('/')->with('info', 'Se ha enviado el mensaje con éxito');

	}

	public function index(){
		$mails = ContactUs::orderBy('id', 'DESC')->paginate(15);

		return view('admin.contactus.index', ['mails'=>$mails] );
	}

	public function show($id)
    {
        $mail = ContactUs::find($id);

        return view('admin.contactus.show', ['mail'=> $mail]);
    }
}

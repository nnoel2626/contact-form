<?php

namespace Nnoel\ContactForm\HTTP\Controllers;
use Nnoel\ContactForm\Mail\ContactFormMailable;
use App\Http\Controllers\Controller;
use Nnoel\ContactForm\Models\Contact;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
     /**
    * GET a contactForm page
    */
    public function index()
    {
        return view('contactForm::contact-form');
    }

    /**
    * Post contact page to send email to Admin
    */
    public function sendEmail(Request $request)
     {
        Contact::create($request->all());

        Mail::to( config ('contactForm.send_email_to') )
        ->send(new ContactFormMailable(
            $request->message,
            $request->name
        ));


        return redirect('contact-form')
        ->with('status', 'your contact form has been submitted!');
        ddd(session('status'));
    }

}


 // Via a request instance...
        //$request->session()->put('key', 'value');



        // if($error){
        //     return redirect('form')->withInput();
        // }else{

        //      return redirect()->route('contact-form')->with();
        // }

       // $name  = $request->input('name');

    //   if ($request->has('name')) {
        //$request->session()->flash('success' . ' ' . 'your contact form has been submitted');
        // } else {
        //     $request->session()->flash('error', 'There was an error submitting your contact form');
        // }


             // $message = $request->session()->flash('status', 'your contact form has been submitted!!');

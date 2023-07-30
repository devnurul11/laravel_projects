<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormEmail;
class EmailController extends Controller
{
        public function showForm(){
            return view('emails.email');
        }

        public function sendEmail(Request $request)
        {
            try{
            $validatedData = $request->validate([
                'email' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);
            $email = $validatedData['email'];
            
            $emailData = [
                'email' => $validatedData['email'],
                'subject' => $validatedData['subject'],
                'message' => $validatedData['message'],
            ];
    
            Mail::to($email)->send(new ContactFormEmail($emailData));
    
            return back()->with('success', 'Email sent successfully!');
        } catch(\Exception $e){
            echo 'new problem';
        }


        }
}

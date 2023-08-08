<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailData;

    /**
     * Create a new message instance.
     *
     * @param  array  $emailData
     * @return void
     */
    public function __construct(array $emailData)
    {
        $this->emailData = $emailData;
    }



    public function envelope(): Envelope
    {
    
      return new Envelope(
            subject:'hello'
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->emailData['subject'])
                    ->from($this->emailData['email'])
                    ->view('emails.contact_form', ['emailData' => $this->emailData]);
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.OTPMail',
        );
    }


}

//new Email

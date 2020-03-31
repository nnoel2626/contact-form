<?php

namespace Nnoel\ContactForm\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMailable extends Mailable
{
    public $message;
    public $name;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contactForm::contactForm.email')
        ->with([
            'message' => $this->message,
            'name' => $this->name
        ]);
    }
}

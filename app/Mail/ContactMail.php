<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Build the message.
     *
     * @return $this
     */
public function build()
    {
        return $this->subject("New Contact Form Submission")
                    ->view('email')
                    ->with('data', $this->data);
    }
}

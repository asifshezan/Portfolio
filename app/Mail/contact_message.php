<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contact_message extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $message = "";

    public function __construct($cm_message)
    {
    $this->message = $cm_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mess = $this->message;
        return $this->view('emails.email', compact('mess'));
    }
}

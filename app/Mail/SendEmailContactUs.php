<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailContactUs extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->to('bdjunayed@gmail.com')
        ->from($this->data['email'], $this->data['name'])->replyTo($this->data['email'], $this->data['name'])
        ->view('layouts.send_email_template_contact_form')
        ->subject('New Customer Equiry from SystemNetware.com');        
    }
}

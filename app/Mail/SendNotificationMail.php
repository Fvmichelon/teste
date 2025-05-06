<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNotificationMail extends Mailable
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
    * Get the message envelope.
    */
   public function envelope(): Envelope
   {
       return new Envelope(
           from: config('mail.from.address'),
           subject: 'Nova notificação',
       );
   }

   /**
    * Get the message content definition.
    */
   public function content(): Content
   {
       return new Content(
           view: 'email.send-notification',
           with: $this->data
       );
   }
}

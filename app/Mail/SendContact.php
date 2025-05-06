<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    private $recaptcha;

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
           from: new Address(env('MAIL_FROM_ADDRESS'), $this->data['name'] ?? 'Usuário'),
           subject: $this->data['subject'] ?? 'Novo contato do site',
       );
   }

   /**
    * Get the message content definition.
    */
   public function content(): Content
   {
       return new Content(
           view: 'email.template-send-email',
           with: ['data' => $this->data]
       );
   }

//    public function build()
//    {
//        return $this->subject('Novo Contato do Site') // Define o assunto do e-mail
//                    ->view('emails.contact') // Define a view HTML que será usada
//                    ->with('data', $this->data); // Passa os dados para a view
//    }
}

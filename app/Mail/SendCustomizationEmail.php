<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendCustomizationEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $isWarning;
    public $subject;
    private $name;
    private $unity;
    private $enterprise;
    private $customization;
    private $expireDate;
    private $generalEmail;
    private $generalWhatsapp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($isWarning, $subject, $name, $unity, $enterprise, $customization, $expireDate, $generalEmail, $generalWhatsapp)
    {
        $this->isWarning = $isWarning;
        $this->subject = $subject;
        $this->name = $name;
        $this->unity = $unity;
        $this->enterprise = $enterprise;
        $this->customization = $customization;
        $this->expireDate = $expireDate;
        $this->generalEmail = $generalEmail;
        $this->generalWhatsapp = $generalWhatsapp;
    }

    /**
    * Get the message envelope.
    */
   public function envelope(): Envelope
   {
       return new Envelope(
            from: config('mail.from.address'),
            subject: $this->subject,
       );
   }

   /**
    * Get the message content definition.
    */
   public function content(): Content
   {
       return new Content(
           view: $this->isWarning ? 'email.warn-customization-deadline' : 'email.notify-new-customization',
           with: [
            "name" => $this->name,
            "unity" => $this->unity,
            "enterprise" => $this->enterprise,
            "customization" => $this->customization,
            "expireDate" => $this->expireDate,
            "generalEmail" => $this->generalEmail,
            "generalWhatsapp" => $this->generalWhatsapp,
           ],
       );
   }
}

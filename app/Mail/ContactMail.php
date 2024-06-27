<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

  
    //public $contactData;

    /**
     * Create a new message instance.
     *
     * @return void
     */  /**
     */
    public function __construct(public array $contactData)
    {
       // 
    }

    /**
     * Get the message envelope.
     */
     public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('marwa@yahoo.com','congratulation'),
            subject: '2M Test Email Template',
        );
    }
     public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact',
        
                with:[
                    'contactData'=>$this->contactData,
    
                ]
        );
        
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    
}

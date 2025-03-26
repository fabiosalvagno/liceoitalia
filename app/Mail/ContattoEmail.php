<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContattoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $email;
    public $messaggio;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->nome = $data['nome'];
        $this->email = $data['email'];
        $this->messaggio = $data['messaggio'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contatto Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contatto',  // La vista che mostra il contenuto dell'email
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

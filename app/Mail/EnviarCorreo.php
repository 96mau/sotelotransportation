<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnviarCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $Nombre;
    public $Correo;
    public $Telefono;
    public $Asunto;
    public $TextMen;
    public $Idioma;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $phone, $subject, $message,$PAGEES)
    {
        $this->Nombre = $name;
        $this->Correo = $email;
        $this->Telefono = $phone;
        $this->Asunto = $subject;
        $this->TextMen = $message;
        
        if ($PAGEES == "1") $this->Idioma = "INGLES";
        else $this->Idioma = "ESPAÑOL";
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Enviar Correo',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.EnviarCorreo',
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

<?php
namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to Our Platform!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.welcome', // Points to resources/views/emails/welcome.blade.php
        );
    }
}
<?php
namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TeacherEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Teacher Notification',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.teachers', // Points to resources/views/emails/teachers.blade.php
        );
    }
}
<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class VisiterEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $content;

    /**
     * Create a new message instance.
     */
    public function __construct($content)
    {
        //
        $this->content = $content;
        log::info($this->content["full_name"]);
        log::info($this->content["visiterEmail"]);
        log::info($this->content["subject"]);
        log::info($this->content["message"]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email visiteur',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'visiterMail',
            with: [
                'data' => $this->content,
                // 'full_name' => $this->content["full_name"],
                // 'visiterEmail' => $this->content["visiterEmail"],
                // 'subject' => $this->content["subject"],
                // 'message' => $this->content["message"],
            ],
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

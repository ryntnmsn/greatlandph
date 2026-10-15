<?php

namespace App\Mail;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Inquiry $inquiry)
    {
    }

    public function envelope(): Envelope
    {
        $replyTo = $this->inquiry->email
            ? [new Address($this->inquiry->email, $this->inquiry->name)]
            : [];

        return new Envelope(
            subject: "New land inquiry from {$this->inquiry->name}",
            replyTo: $replyTo,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiries.received',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return array_map(
            fn (string $path): Attachment => Attachment::fromStorageDisk('local', $path),
            $this->inquiry->photos ?? [],
        );
    }
}

<?php

namespace App\Mail;

use App\Models\PropertyEvaluation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PropertyEvaluationReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public PropertyEvaluation $propertyEvaluation)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Property evaluation submitted by {$this->propertyEvaluation->owner_name}",
            replyTo: [new Address($this->propertyEvaluation->email, $this->propertyEvaluation->completing_person)],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.property-evaluations.received',
        );
    }

    /**
     * Get the uploaded supporting files for the email.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return array_map(
            fn (string $path): Attachment => Attachment::fromStorageDisk('local', $path),
            $this->propertyEvaluation->documents ?? [],
        );
    }
}

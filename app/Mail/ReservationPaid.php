<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Reservation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationPaid extends Mailable
{
    use Queueable, SerializesModels;

    public Reservation $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function build()
    {
        return $this->subject('Your reservation has been paid')
                    ->view('emails.reservation-paid');
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reservation Paid',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $name, $email, $screenshotPath;
    public $podcastType;
    public $hours;
    public $price;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $screenshotPath,$podcastType, $hours, $price)
{
    $this->name = $name;
    $this->email = $email;
    $this->screenshotPath = $screenshotPath;
    $this->podcastType = $podcastType;
        $this->hours = $hours;
        $this->price = $price;
}


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Received',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.payment-recived',
            with: [
            'name' => $this->name,
            'email' => $this->email,
            'podcastType'=>$this->podcastType,
            'hours'=>$this->hours,
            'price'=>$this->price


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
        return [
            \Illuminate\Mail\Mailables\Attachment::fromStorageDisk('public', $this->screenshotPath)
            ->as('payment_screenshot.jpg') // Optional rename
            ->withMime('image/jpeg'),      // Set proper MIME type
            ];
    }
}

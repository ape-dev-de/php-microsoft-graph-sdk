<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingReminder
 */
class BookingReminder
{
    /**
     * The message in the reminder.
     */
    private ?string $message;

    /**
     * The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format.
     */
    private ?string $offset;

    /**
     * This type represents when and to whom to send an e-mail reminder.
     */
    private ?string $recipients;


    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getOffset(): ?string
    {
        return $this->offset;
    }

    public function setOffset(?string $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function getRecipients(): ?string
    {
        return $this->recipients;
    }

    public function setRecipients(?string $recipients): self
    {
        $this->recipients = $recipients;
        return $this;
    }

}

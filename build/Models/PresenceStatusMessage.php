<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PresenceStatusMessage
 */
class PresenceStatusMessage
{
    /**
     * Time in which the status message expires.If not provided, the status message doesn''t expire.expiryDateTime.dateTime shouldn''t include time zone.expiryDateTime isn''t available when you request the presence of another user.
     */
    private ?string $expiryDateTime;

    /**
     * Status message item. The only supported format currently is message.contentType = 'text'.
     */
    private ?string $message;

    /**
     * Time in which the status message was published.Read-only.publishedDateTime isn't available when you request the presence of another user.
     */
    private ?\DateTimeInterface $publishedDateTime;


    public function getExpiryDateTime(): ?string
    {
        return $this->expiryDateTime;
    }

    public function setExpiryDateTime(?string $expiryDateTime): self
    {
        $this->expiryDateTime = $expiryDateTime;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getPublishedDateTime(): ?\DateTimeInterface
    {
        return $this->publishedDateTime;
    }

    public function setPublishedDateTime(?\DateTimeInterface $publishedDateTime): self
    {
        $this->publishedDateTime = $publishedDateTime;
        return $this;
    }

}

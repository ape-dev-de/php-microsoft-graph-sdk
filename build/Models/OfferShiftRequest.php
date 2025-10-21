<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OfferShiftRequest
 */
class OfferShiftRequest
{
    /**
     * The date and time when the recipient approved or declined the request.
     */
    private ?\DateTimeInterface $recipientActionDateTime;

    /**
     * The message sent by the recipient regarding the request.
     */
    private ?string $recipientActionMessage;

    /**
     * The recipient's user ID.
     */
    private ?string $recipientUserId;

    /**
     * The sender's shift ID.
     */
    private ?string $senderShiftId;


    public function getRecipientActionDateTime(): ?\DateTimeInterface
    {
        return $this->recipientActionDateTime;
    }

    public function setRecipientActionDateTime(?\DateTimeInterface $recipientActionDateTime): self
    {
        $this->recipientActionDateTime = $recipientActionDateTime;
        return $this;
    }

    public function getRecipientActionMessage(): ?string
    {
        return $this->recipientActionMessage;
    }

    public function setRecipientActionMessage(?string $recipientActionMessage): self
    {
        $this->recipientActionMessage = $recipientActionMessage;
        return $this;
    }

    public function getRecipientUserId(): ?string
    {
        return $this->recipientUserId;
    }

    public function setRecipientUserId(?string $recipientUserId): self
    {
        $this->recipientUserId = $recipientUserId;
        return $this;
    }

    public function getSenderShiftId(): ?string
    {
        return $this->senderShiftId;
    }

    public function setSenderShiftId(?string $senderShiftId): self
    {
        $this->senderShiftId = $senderShiftId;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardItem
 */
class CloudClipboardItem
{
    /**
     * Set by the server. DateTime in UTC when the object was created on the server.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Set by the server. DateTime in UTC when the object expires and after that the object is no longer available. The default and also maximum TTL is 12 hours after the creation, but it might change for performance optimization.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Set by the server if not provided in the client's request. DateTime in UTC when the object was modified by the client.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * A cloudClipboardItem can have multiple cloudClipboardItemPayload objects in the payloads. A window can place more than one clipboard object on the clipboard. Each one represents the same information in a different clipboard format.
     */
    private ?string $payloads;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getPayloads(): ?string
    {
        return $this->payloads;
    }

    public function setPayloads(?string $payloads): self
    {
        $this->payloads = $payloads;
        return $this;
    }

}

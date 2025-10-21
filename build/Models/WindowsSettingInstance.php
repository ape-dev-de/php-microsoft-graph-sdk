<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsSettingInstance
 */
class WindowsSettingInstance
{
    /**
     * Set by the server. Represents the dateTime in UTC when the object was created on the server.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Set by the server. The object expires at the specified dateTime in UTC, making it unavailable after that time.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Set by the server if not provided in the request from the Windows client device. Refers to the user's Windows device that modified the object at the specified dateTime in UTC.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Base64-encoded JSON setting value.
     */
    private ?string $payload;


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

    public function getPayload(): ?string
    {
        return $this->payload;
    }

    public function setPayload(?string $payload): self
    {
        $this->payload = $payload;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePoint
 */
class RestorePoint
{
    /**
     * Expiration date time of the restore point.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Date time when the restore point was created.
     */
    private ?\DateTimeInterface $protectionDateTime;

    /**
     * The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     */
    private ?string $tags;

    /**
     * The site, drive, or mailbox units that are protected under a protection policy.
     */
    private ?string $protectionUnit;


    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getProtectionDateTime(): ?\DateTimeInterface
    {
        return $this->protectionDateTime;
    }

    public function setProtectionDateTime(?\DateTimeInterface $protectionDateTime): self
    {
        $this->protectionDateTime = $protectionDateTime;
        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function getProtectionUnit(): ?string
    {
        return $this->protectionUnit;
    }

    public function setProtectionUnit(?string $protectionUnit): self
    {
        $this->protectionUnit = $protectionUnit;
        return $this;
    }

}

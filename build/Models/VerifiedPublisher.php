<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerifiedPublisher
 */
class VerifiedPublisher
{
    /**
     * The timestamp when the verified publisher was first added or most recently updated.
     */
    private ?\DateTimeInterface $addedDateTime;

    /**
     * The verified publisher name from the app publisher's Partner Center account.
     */
    private ?string $displayName;

    /**
     * The ID of the verified publisher from the app publisher's Partner Center account.
     */
    private ?string $verifiedPublisherId;

    public function getAddedDateTime(): ?\DateTimeInterface
    {
        return $this->addedDateTime;
    }

    public function setAddedDateTime(?\DateTimeInterface $addedDateTime): self
    {
        $this->addedDateTime = $addedDateTime;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getVerifiedPublisherId(): ?string
    {
        return $this->verifiedPublisherId;
    }

    public function setVerifiedPublisherId(?string $verifiedPublisherId): self
    {
        $this->verifiedPublisherId = $verifiedPublisherId;
        return $this;
    }

}

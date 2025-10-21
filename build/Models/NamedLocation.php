<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NamedLocation
 */
class NamedLocation
{
    /**
     * The Timestamp type represents creation date and time of the location using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Human-readable name of the location.
     */
    private ?string $displayName;

    /**
     * The Timestamp type represents last modified date and time of the location using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $modifiedDateTime;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsageDetails
 */
class UsageDetails
{
    /**
     * The date and time the resource was last accessed by the user. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $lastAccessedDateTime;

    /**
     * The date and time the resource was last modified by the user. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;


    public function getLastAccessedDateTime(): ?\DateTimeInterface
    {
        return $this->lastAccessedDateTime;
    }

    public function setLastAccessedDateTime(?\DateTimeInterface $lastAccessedDateTime): self
    {
        $this->lastAccessedDateTime = $lastAccessedDateTime;
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

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalActivity
 */
class ExternalConnectorsExternalActivity
{
    /**
     * The date and time when the particular activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     */
    private ?string $type;

    /**
     * Represents an identity used to identify who is responsible for the activity.
     */
    private ?string $performedBy;


    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getPerformedBy(): ?string
    {
        return $this->performedBy;
    }

    public function setPerformedBy(?string $performedBy): self
    {
        $this->performedBy = $performedBy;
        return $this;
    }

}

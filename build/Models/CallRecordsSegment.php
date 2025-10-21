<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsSegment
 */
class CallRecordsSegment
{
    /**
     * Endpoint that answered this segment.
     */
    private ?string $callee;

    /**
     * Endpoint that initiated this segment.
     */
    private ?string $caller;

    /**
     * UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * Failure information associated with the segment if it failed.
     */
    private ?string $failureInfo;

    /**
     * Media associated with this segment.
     */
    private array $media = [];

    /**
     * UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $startDateTime;


    public function getCallee(): ?string
    {
        return $this->callee;
    }

    public function setCallee(?string $callee): self
    {
        $this->callee = $callee;
        return $this;
    }

    public function getCaller(): ?string
    {
        return $this->caller;
    }

    public function setCaller(?string $caller): self
    {
        $this->caller = $caller;
        return $this;
    }

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getFailureInfo(): ?string
    {
        return $this->failureInfo;
    }

    public function setFailureInfo(?string $failureInfo): self
    {
        $this->failureInfo = $failureInfo;
        return $this;
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function setMedia(array $media): self
    {
        $this->media = $media;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

}

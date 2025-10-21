<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsSession
 */
class CallRecordsSession
{
    /**
     * Endpoint that answered the session.
     */
    private ?string $callee;

    /**
     * Endpoint that initiated the session.
     */
    private ?string $caller;

    /**
     * UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * Failure information associated with the session if the session failed.
     */
    private ?string $failureInfo;

    /**
     * Specifies whether the session is a test.
     */
    private ?bool $isTest;

    /**
     * List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     */
    private array $modalities = [];

    /**
     * UTC time when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * The list of segments involved in the session. Read-only. Nullable.
     * @var string[]
     */
    private array $segments = [];


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

    public function getIsTest(): ?bool
    {
        return $this->isTest;
    }

    public function setIsTest(?bool $isTest): self
    {
        $this->isTest = $isTest;
        return $this;
    }

    public function getModalities(): array
    {
        return $this->modalities;
    }

    public function setModalities(array $modalities): self
    {
        $this->modalities = $modalities;
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

    /**
     * @return string[]
     */
    public function getSegments(): array
    {
        return $this->segments;
    }

    /**
     * @param string[] $segments
     */
    public function setSegments(array $segments): self
    {
        $this->segments = $segments;
        return $this;
    }

}

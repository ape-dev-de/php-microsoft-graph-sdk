<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityPassiveDnsRecord
 */
class SecurityPassiveDnsRecord
{
    /**
     * The date and time that this passiveDnsRecord entry was collected by Microsoft. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $collectedDateTime;

    /**
     * The date and time when this passiveDnsRecord entry was first seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The date and time when this passiveDnsRecord entry was most recently seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The DNS record type for this passiveDnsRecord entry.
     */
    private ?string $recordType;

    /**
     */
    private ?string $artifact;

    /**
     */
    private ?string $parentHost;

    public function getCollectedDateTime(): ?\DateTimeInterface
    {
        return $this->collectedDateTime;
    }

    public function setCollectedDateTime(?\DateTimeInterface $collectedDateTime): self
    {
        $this->collectedDateTime = $collectedDateTime;
        return $this;
    }

    public function getFirstSeenDateTime(): ?\DateTimeInterface
    {
        return $this->firstSeenDateTime;
    }

    public function setFirstSeenDateTime(?\DateTimeInterface $firstSeenDateTime): self
    {
        $this->firstSeenDateTime = $firstSeenDateTime;
        return $this;
    }

    public function getLastSeenDateTime(): ?\DateTimeInterface
    {
        return $this->lastSeenDateTime;
    }

    public function setLastSeenDateTime(?\DateTimeInterface $lastSeenDateTime): self
    {
        $this->lastSeenDateTime = $lastSeenDateTime;
        return $this;
    }

    public function getRecordType(): ?string
    {
        return $this->recordType;
    }

    public function setRecordType(?string $recordType): self
    {
        $this->recordType = $recordType;
        return $this;
    }

    public function getArtifact(): ?string
    {
        return $this->artifact;
    }

    public function setArtifact(?string $artifact): self
    {
        $this->artifact = $artifact;
        return $this;
    }

    public function getParentHost(): ?string
    {
        return $this->parentHost;
    }

    public function setParentHost(?string $parentHost): self
    {
        $this->parentHost = $parentHost;
        return $this;
    }

}

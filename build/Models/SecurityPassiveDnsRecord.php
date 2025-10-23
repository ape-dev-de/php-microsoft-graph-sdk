<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityPassiveDnsRecord
 */
class SecurityPassiveDnsRecord
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time that this passiveDnsRecord entry was collected by Microsoft. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $collectedDateTime = null;

    /** The date and time when this passiveDnsRecord entry was first seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** The date and time when this passiveDnsRecord entry was most recently seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastSeenDateTime = null;

    /** The DNS record type for this passiveDnsRecord entry. */
    public ?string $recordType = null;

    /**  */
    public ?SecurityArtifact $artifact = null;

    /**  */
    public ?SecurityHost $parentHost = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['collectedDateTime'])) {
            $this->collectedDateTime = is_string($data['collectedDateTime']) ? new \DateTimeImmutable($data['collectedDateTime']) : $data['collectedDateTime'];
        }
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = is_string($data['firstSeenDateTime']) ? new \DateTimeImmutable($data['firstSeenDateTime']) : $data['firstSeenDateTime'];
        }
        if (isset($data['lastSeenDateTime'])) {
            $this->lastSeenDateTime = is_string($data['lastSeenDateTime']) ? new \DateTimeImmutable($data['lastSeenDateTime']) : $data['lastSeenDateTime'];
        }
        if (isset($data['recordType'])) {
            $this->recordType = $data['recordType'];
        }
        if (isset($data['artifact'])) {
            $this->artifact = $data['artifact'];
        }
        if (isset($data['parentHost'])) {
            $this->parentHost = $data['parentHost'];
        }
    }
}

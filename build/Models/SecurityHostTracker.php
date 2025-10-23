<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostTracker
 */
class SecurityHostTracker
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The first date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** The kind of hostTracker that was detected. For example, GoogleAnalyticsID or JarmHash. */
    public ?string $kind = null;

    /** The most recent date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastSeenDateTime = null;

    /** The identification value for the hostTracker. */
    public ?string $value = null;

    /**  */
    public ?SecurityHost $host = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = is_string($data['firstSeenDateTime']) ? new \DateTimeImmutable($data['firstSeenDateTime']) : $data['firstSeenDateTime'];
        }
        if (isset($data['kind'])) {
            $this->kind = $data['kind'];
        }
        if (isset($data['lastSeenDateTime'])) {
            $this->lastSeenDateTime = is_string($data['lastSeenDateTime']) ? new \DateTimeImmutable($data['lastSeenDateTime']) : $data['lastSeenDateTime'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
        if (isset($data['host'])) {
            $this->host = is_array($data['host']) ? new SecurityHost($data['host']) : $data['host'];
        }
    }
}

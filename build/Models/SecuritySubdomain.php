<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySubdomain
 */
class SecuritySubdomain
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when Microsoft Defender Threat Intelligence first observed the subdomain. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

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
            $this->firstSeenDateTime = $data['firstSeenDateTime'];
        }
        if (isset($data['host'])) {
            $this->host = $data['host'];
        }
    }
}

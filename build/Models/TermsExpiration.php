<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsExpiration
 */
class TermsExpiration
{
    /** Represents the frequency at which the terms will expire, after its first expiration as set in startDateTime. The value is represented in ISO 8601 format for durations. For example, PT1M represents a time period of one month. */
    public ?string $frequency = null;

    /** The DateTime when the agreement is set to expire for all users. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $startDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['frequency'])) {
            $this->frequency = $data['frequency'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
    }
}

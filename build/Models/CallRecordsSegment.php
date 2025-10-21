<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsSegment
 */
class CallRecordsSegment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Endpoint that answered this segment. */
        public ?string $callee = null,
        /** Endpoint that initiated this segment. */
        public ?string $caller = null,
        /** UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $endDateTime = null,
        /** Failure information associated with the segment if it failed. */
        public ?string $failureInfo = null,
        /** Media associated with this segment. */
        public array $media = [],
        /** UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $startDateTime = null
    ) {}
}

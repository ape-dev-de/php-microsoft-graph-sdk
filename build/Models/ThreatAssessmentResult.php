<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatAssessmentResult
 */
class ThreatAssessmentResult
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The result message for each threat assessment. */
        public ?string $message = null,
        /** The threat assessment result type. Possible values are: checkPolicy, rescan. */
        public ?string $resultType = null
    ) {}
}

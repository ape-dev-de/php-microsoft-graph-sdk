<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationOutcome
 */
class EducationOutcome
{
    public function __construct(
        /** The individual who updated the resource. */
        public ?string $lastModifiedBy = null,
        /** The moment in time when the resource was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntitlementManagementSchedule
 */
class EntitlementManagementSchedule
{
    public function __construct(
        /** When the access should expire. */
        public ?string $expiration = null,
        /** The recurring access review pattern. Not used in access requests. */
        public ?string $recurrence = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $startDateTime = null
    ) {}
}

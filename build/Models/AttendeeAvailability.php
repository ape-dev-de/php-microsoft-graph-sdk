<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeAvailability
 */
class AttendeeAvailability
{
    public function __construct(
        /** The email address and type of attendee - whether it's a person or a resource, and whether required or optional if it's a person. */
        public ?string $attendee = null,
        /** The availability status of the attendee. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown. */
        public ?string $availability = null
    ) {}
}

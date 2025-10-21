<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationConstraint
 */
class LocationConstraint
{
    public function __construct(
        /** The client requests the service to include in the response a meeting location for the meeting. If this is true and all the resources are busy, findMeetingTimes won''t return any meeting time suggestions. If this is false and all the resources are busy, findMeetingTimes would still look for meeting times without locations. */
        public ?bool $isRequired = null,
        /** Constraint information for one or more locations that the client requests for the meeting. */
        public array $locations = [],
        /** The client requests the service to suggest one or more meeting locations. */
        public ?string $suggestLocation = null
    ) {}
}

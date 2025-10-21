<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationConstraintItem
 */
class LocationConstraintItem
{
    public function __construct(
        /** If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user''s cache without checking if it''s free. Default is true. */
        public ?string $resolveAvailability = null
    ) {}
}

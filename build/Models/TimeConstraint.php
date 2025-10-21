<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeConstraint
 */
class TimeConstraint
{
    public function __construct(
        /** The nature of the activity, optional. The possible values are: work, personal, unrestricted, or unknown. */
        public ?string $activityDomain = null,
        /**  */
        public array $timeSlots = []
    ) {}
}

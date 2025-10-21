<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StaffAvailabilityItem
 */
class StaffAvailabilityItem
{
    public function __construct(
        /** Each item in this collection indicates a slot and the status of the staff member. */
        public array $availabilityItems = [],
        /** The ID of the staff member. */
        public ?string $staffId = null
    ) {}
}

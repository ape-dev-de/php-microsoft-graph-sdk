<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsAvailabilityWindow
 */
class BookingsAvailabilityWindow
{
    public function __construct(
        /**  */
        public ?BookingsServiceAvailabilityType $availabilityType = null,
        /** The hours of operation in a week. The business hours value is set to null if the availability type isn't customWeeklyHours. */
        public array $businessHours = [],
        /** End date of the availability window. */
        public ?\DateTimeInterface $endDate = null,
        /** Start date of the availability window. */
        public ?\DateTimeInterface $startDate = null
    ) {}
}

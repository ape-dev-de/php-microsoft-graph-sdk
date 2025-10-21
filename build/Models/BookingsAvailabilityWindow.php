<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsAvailabilityWindow
 */
class BookingsAvailabilityWindow
{
    public function __construct(
        /** End date of the availability window. */
        public ?\DateTimeInterface $endDate = null,
        /** Start date of the availability window. */
        public ?\DateTimeInterface $startDate = null
    ) {}
}

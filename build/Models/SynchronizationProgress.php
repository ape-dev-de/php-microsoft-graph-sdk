<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationProgress
 */
class SynchronizationProgress
{
    public function __construct(
        /** The numerator of a progress ratio; the number of units of changes already processed. */
        public ?float $completedUnits = null,
        /** The time of a progress observation as an offset in minutes from UTC. */
        public ?\DateTimeInterface $progressObservationDateTime = null,
        /** The denominator of a progress ratio; a number of units of changes to be processed to accomplish synchronization. */
        public ?float $totalUnits = null,
        /** An optional description of the units. */
        public ?string $units = null
    ) {}
}

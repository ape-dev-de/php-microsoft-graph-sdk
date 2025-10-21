<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionDurationInDays
 */
class SecurityRetentionDurationInDays
{
    public function __construct(
        /** Specifies the time period in days for which an item with the applied retention label will be retained for. */
        public ?float $days = null
    ) {}
}

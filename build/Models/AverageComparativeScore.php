<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AverageComparativeScore
 */
class AverageComparativeScore
{
    public function __construct(
        /** Average score within specified basis. */
        public ?string $averageScore = null,
        /** Scope type. The possible values are: AllTenants, TotalSeats, IndustryTypes. */
        public ?string $basis = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsMetric
 */
class UserExperienceAnalyticsMetric
{
    public function __construct(
        /** The unit of the user experience analytics metric. Examples: none, percentage, count, seconds, score. */
        public ?string $unit = null,
        /** The user experience analytics metric contains the score and units of a metric of a user experience anlaytics category. */
        public ?string $value = null
    ) {}
}

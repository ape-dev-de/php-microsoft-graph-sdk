<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsMetric
 */
class UserExperienceAnalyticsMetric
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The unit of the user experience analytics metric. Examples: none, percentage, count, seconds, score. */
        public ?string $unit = null,
        /** The value of the user experience analytics metric. */
        public ?string $value = null
    ) {}
}

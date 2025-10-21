<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsInsight
 */
class UserExperienceAnalyticsInsight
{
    public function __construct(
        /** The unique identifier of the user experience analytics insight. */
        public ?string $insightId = null,
        /**  */
        public ?string $severity = null,
        /** The unique identifier of the user experience analytics metric. */
        public ?string $userExperienceAnalyticsMetricId = null,
        /** The value of the user experience analytics insight. */
        public array $values = []
    ) {}
}

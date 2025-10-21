<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereMetric
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The work from anywhere metric devices. Read-only. */
        public array $metricDevices = []
    ) {}
}

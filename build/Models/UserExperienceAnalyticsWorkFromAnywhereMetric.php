<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereMetric
{
    public function __construct(
        /** @var string[] The user experience analytics metric for work from anywhere report. */
        public array $metricDevices = []
    ) {}
}

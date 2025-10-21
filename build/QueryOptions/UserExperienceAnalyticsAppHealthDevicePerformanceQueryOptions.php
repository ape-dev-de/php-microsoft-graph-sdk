<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthDevicePerformance resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthDevicePerformance
     */

    /**
     * Select specific UserExperienceAnalyticsAppHealthDevicePerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

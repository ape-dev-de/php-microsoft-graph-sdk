<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthDeviceModelPerformance resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsAppHealthDeviceModelPerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthDeviceModelPerformance
     */

    /**
     * Select specific UserExperienceAnalyticsAppHealthDeviceModelPerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

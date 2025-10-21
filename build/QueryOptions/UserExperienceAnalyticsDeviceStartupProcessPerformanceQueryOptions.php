<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupProcessPerformance resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsDeviceStartupProcessPerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsDeviceStartupProcessPerformance
     */

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupProcessPerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDevicePerformance resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsDevicePerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsDevicePerformance
     */

    /**
     * Select specific UserExperienceAnalyticsDevicePerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

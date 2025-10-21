<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthDevicePerformanceDetails resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthDevicePerformanceDetails
     */

    /**
     * Select specific UserExperienceAnalyticsAppHealthDevicePerformanceDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

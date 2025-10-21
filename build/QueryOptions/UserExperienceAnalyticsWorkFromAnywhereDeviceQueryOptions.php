<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereDevice resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsWorkFromAnywhereDeviceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsWorkFromAnywhereDevice
     */

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereDevice properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupHistory resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsDeviceStartupHistoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsDeviceStartupHistory
     */

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupHistory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

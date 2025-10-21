<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupProcess resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsDeviceStartupProcessQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsDeviceStartupProcess
     */

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupProcess properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

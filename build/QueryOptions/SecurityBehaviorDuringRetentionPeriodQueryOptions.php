<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityBehaviorDuringRetentionPeriod resources
 *
 * Available select fields:
 */
class SecurityBehaviorDuringRetentionPeriodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityBehaviorDuringRetentionPeriod
     */

    /**
     * Select specific SecurityBehaviorDuringRetentionPeriod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

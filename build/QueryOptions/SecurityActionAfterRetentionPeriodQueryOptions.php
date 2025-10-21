<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityActionAfterRetentionPeriod resources
 *
 * Available select fields:
 */
class SecurityActionAfterRetentionPeriodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityActionAfterRetentionPeriod
     */

    /**
     * Select specific SecurityActionAfterRetentionPeriod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

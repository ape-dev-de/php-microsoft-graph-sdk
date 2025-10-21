<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityStatisticsOptions resources
 *
 * Available select fields:
 */
class SecurityStatisticsOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityStatisticsOptions
     */

    /**
     * Select specific SecurityStatisticsOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UsedInsight resources
 *
 * Available select fields:
 */
class UsedInsightQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UsedInsight
     */

    /**
     * Select specific UsedInsight properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

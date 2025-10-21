<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedInsight resources
 *
 * Available select fields:
 */
class SharedInsightQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedInsight
     */

    /**
     * Select specific SharedInsight properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

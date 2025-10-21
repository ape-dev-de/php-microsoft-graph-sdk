<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemInsights resources
 *
 * Available select fields:
 */
class ItemInsightsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ItemInsights
     */

    /**
     * Select specific ItemInsights properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

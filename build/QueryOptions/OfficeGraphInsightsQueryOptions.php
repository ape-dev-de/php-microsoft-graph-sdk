<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OfficeGraphInsights resources
 *
 * Available select fields:
 */
class OfficeGraphInsightsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OfficeGraphInsights
     */

    /**
     * Select specific OfficeGraphInsights properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

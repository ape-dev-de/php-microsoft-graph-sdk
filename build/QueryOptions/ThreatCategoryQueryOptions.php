<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatCategory resources
 *
 * Available select fields:
 */
class ThreatCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThreatCategory
     */

    /**
     * Select specific ThreatCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

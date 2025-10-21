<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyServicePrincipalHistoryItem resources
 *
 * Available select fields:
 */
class RiskyServicePrincipalHistoryItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskyServicePrincipalHistoryItem
     */

    /**
     * Select specific RiskyServicePrincipalHistoryItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

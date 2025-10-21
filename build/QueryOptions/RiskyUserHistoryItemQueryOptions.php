<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyUserHistoryItem resources
 *
 * Available select fields:
 */
class RiskyUserHistoryItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskyUserHistoryItem
     */

    /**
     * Select specific RiskyUserHistoryItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActivityHistoryItem resources
 *
 * Available select fields:
 */
class ActivityHistoryItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ActivityHistoryItem
     */

    /**
     * Select specific ActivityHistoryItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

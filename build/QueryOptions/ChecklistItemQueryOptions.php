<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChecklistItem resources
 *
 * Available select fields:
 */
class ChecklistItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChecklistItem
     */

    /**
     * Select specific ChecklistItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Importance resources
 *
 * Available select fields:
 */
class ImportanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Importance
     */

    /**
     * Select specific Importance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

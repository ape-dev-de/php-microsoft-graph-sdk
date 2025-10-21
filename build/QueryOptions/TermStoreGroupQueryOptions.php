<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreGroup resources
 *
 * Available select fields:
 */
class TermStoreGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermStoreGroup
     */

    /**
     * Select specific TermStoreGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreTermGroupScope resources
 *
 * Available select fields:
 */
class TermStoreTermGroupScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermStoreTermGroupScope
     */

    /**
     * Select specific TermStoreTermGroupScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

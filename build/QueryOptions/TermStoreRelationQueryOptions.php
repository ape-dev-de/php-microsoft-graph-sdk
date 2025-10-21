<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreRelation resources
 *
 * Available select fields:
 */
class TermStoreRelationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermStoreRelation
     */

    /**
     * Select specific TermStoreRelation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

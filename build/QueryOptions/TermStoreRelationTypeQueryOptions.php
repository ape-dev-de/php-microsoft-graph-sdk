<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreRelationType resources
 *
 * Available select fields:
 */
class TermStoreRelationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermStoreRelationType
     */

    /**
     * Select specific TermStoreRelationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

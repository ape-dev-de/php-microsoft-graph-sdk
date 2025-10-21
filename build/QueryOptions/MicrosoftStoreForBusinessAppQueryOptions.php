<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftStoreForBusinessApp resources
 *
 * Available select fields:
 */
class MicrosoftStoreForBusinessAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftStoreForBusinessApp
     */

    /**
     * Select specific MicrosoftStoreForBusinessApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

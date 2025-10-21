<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Mutability resources
 *
 * Available select fields:
 */
class MutabilityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Mutability
     */

    /**
     * Select specific Mutability properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

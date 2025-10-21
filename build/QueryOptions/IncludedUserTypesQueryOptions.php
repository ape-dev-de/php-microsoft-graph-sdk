<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IncludedUserTypes resources
 *
 * Available select fields:
 */
class IncludedUserTypesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IncludedUserTypes
     */

    /**
     * Select specific IncludedUserTypes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

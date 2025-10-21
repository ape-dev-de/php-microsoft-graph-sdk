<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityItemsToInclude resources
 *
 * Available select fields:
 */
class SecurityItemsToIncludeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityItemsToInclude
     */

    /**
     * Select specific SecurityItemsToInclude properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

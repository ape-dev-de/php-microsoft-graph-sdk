<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedEBook resources
 *
 * Available select fields:
 */
class ManagedEBookQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedEBook
     */

    /**
     * Select specific ManagedEBook properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

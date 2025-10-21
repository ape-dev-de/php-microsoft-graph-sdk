<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Person resources
 *
 * Available select fields:
 */
class PersonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Person
     */

    /**
     * Select specific Person properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

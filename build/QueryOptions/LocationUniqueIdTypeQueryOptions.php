<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocationUniqueIdType resources
 *
 * Available select fields:
 */
class LocationUniqueIdTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LocationUniqueIdType
     */

    /**
     * Select specific LocationUniqueIdType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

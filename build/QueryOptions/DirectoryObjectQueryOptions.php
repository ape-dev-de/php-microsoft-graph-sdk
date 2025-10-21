<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryObject resources
 *
 * Available select fields:
 */
class DirectoryObjectQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DirectoryObject
     */

    /**
     * Select specific DirectoryObject properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

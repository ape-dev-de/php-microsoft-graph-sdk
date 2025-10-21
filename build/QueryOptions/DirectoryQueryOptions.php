<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Directory resources
 *
 * Available select fields:
 */
class DirectoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Directory
     */

    /**
     * Select specific Directory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

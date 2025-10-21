<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryDefinitionDiscoverabilities resources
 *
 * Available select fields:
 */
class DirectoryDefinitionDiscoverabilitiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DirectoryDefinitionDiscoverabilities
     */

    /**
     * Select specific DirectoryDefinitionDiscoverabilities properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

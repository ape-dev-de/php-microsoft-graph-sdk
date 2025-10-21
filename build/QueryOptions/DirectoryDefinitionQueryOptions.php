<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryDefinition resources
 *
 * Available select fields:
 */
class DirectoryDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DirectoryDefinition
     */

    /**
     * Select specific DirectoryDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

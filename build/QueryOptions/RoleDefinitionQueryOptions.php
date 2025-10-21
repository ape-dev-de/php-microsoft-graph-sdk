<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleDefinition resources
 *
 * Available select fields:
 */
class RoleDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleDefinition
     */

    /**
     * Select specific RoleDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

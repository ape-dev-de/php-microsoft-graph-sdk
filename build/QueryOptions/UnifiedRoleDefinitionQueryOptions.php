<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleDefinition resources
 *
 * Available select fields:
 */
class UnifiedRoleDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleDefinition
     */

    /**
     * Select specific UnifiedRoleDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

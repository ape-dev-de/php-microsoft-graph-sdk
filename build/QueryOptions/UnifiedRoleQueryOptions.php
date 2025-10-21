<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRole resources
 *
 * Available select fields:
 * - roleDefinitionId
 */
class UnifiedRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRole
     */
    public const FIELD_ROLE_DEFINITION_ID = 'roleDefinitionId';

    /**
     * Select specific UnifiedRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

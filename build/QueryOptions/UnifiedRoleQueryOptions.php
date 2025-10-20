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
    public const FIELD_ROLE_DEFINITION_ID = 'roleDefinitionId';

    /**
     * Select specific UnifiedRole properties
     * 
     * @param array<string> $select Use UnifiedRoleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

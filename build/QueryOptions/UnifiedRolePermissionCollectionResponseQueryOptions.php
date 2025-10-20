<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRolePermissionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRolePermissionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRolePermissionCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRolePermissionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

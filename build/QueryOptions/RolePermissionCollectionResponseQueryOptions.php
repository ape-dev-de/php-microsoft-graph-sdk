<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RolePermissionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RolePermissionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RolePermissionCollectionResponse properties
     * 
     * @param array<string> $select Use RolePermissionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

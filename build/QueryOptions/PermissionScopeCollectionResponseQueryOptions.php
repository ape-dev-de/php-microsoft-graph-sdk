<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PermissionScopeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PermissionScopeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PermissionScopeCollectionResponse properties
     * 
     * @param array<string> $select Use PermissionScopeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

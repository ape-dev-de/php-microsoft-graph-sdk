<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourcePermissionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ResourcePermissionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ResourcePermissionCollectionResponse properties
     * 
     * @param array<string> $select Use ResourcePermissionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

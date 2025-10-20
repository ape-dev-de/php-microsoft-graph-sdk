<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceSpecificPermissionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ResourceSpecificPermissionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ResourceSpecificPermissionCollectionResponse properties
     * 
     * @param array<string> $select Use ResourceSpecificPermissionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

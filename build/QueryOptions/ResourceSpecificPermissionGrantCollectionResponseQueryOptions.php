<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceSpecificPermissionGrantCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ResourceSpecificPermissionGrantCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ResourceSpecificPermissionGrantCollectionResponse properties
     * 
     * @param array<string> $select Use ResourceSpecificPermissionGrantCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

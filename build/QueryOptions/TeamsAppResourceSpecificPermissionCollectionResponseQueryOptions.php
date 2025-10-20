<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppResourceSpecificPermissionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeamsAppResourceSpecificPermissionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeamsAppResourceSpecificPermissionCollectionResponse properties
     * 
     * @param array<string> $select Use TeamsAppResourceSpecificPermissionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DelegatedAdminRelationshipCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DelegatedAdminRelationshipCollectionResponse properties
     * 
     * @param array<string> $select Use DelegatedAdminRelationshipCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

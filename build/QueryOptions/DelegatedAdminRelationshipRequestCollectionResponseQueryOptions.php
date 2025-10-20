<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DelegatedAdminRelationshipRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DelegatedAdminRelationshipRequestCollectionResponse properties
     * 
     * @param array<string> $select Use DelegatedAdminRelationshipRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

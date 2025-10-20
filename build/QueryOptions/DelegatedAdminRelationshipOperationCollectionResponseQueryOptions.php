<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DelegatedAdminRelationshipOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DelegatedAdminRelationshipOperationCollectionResponse properties
     * 
     * @param array<string> $select Use DelegatedAdminRelationshipOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

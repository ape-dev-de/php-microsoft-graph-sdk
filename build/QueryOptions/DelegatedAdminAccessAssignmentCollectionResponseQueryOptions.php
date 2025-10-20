<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminAccessAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DelegatedAdminAccessAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DelegatedAdminAccessAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use DelegatedAdminAccessAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

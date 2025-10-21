<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipOperationType resources
 *
 * Available select fields:
 */
class DelegatedAdminRelationshipOperationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminRelationshipOperationType
     */

    /**
     * Select specific DelegatedAdminRelationshipOperationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

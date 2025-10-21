<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipOperation resources
 *
 * Available select fields:
 */
class DelegatedAdminRelationshipOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminRelationshipOperation
     */

    /**
     * Select specific DelegatedAdminRelationshipOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationship resources
 *
 * Available select fields:
 */
class DelegatedAdminRelationshipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminRelationship
     */

    /**
     * Select specific DelegatedAdminRelationship properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

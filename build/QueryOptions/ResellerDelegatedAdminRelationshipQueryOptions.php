<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResellerDelegatedAdminRelationship resources
 *
 * Available select fields:
 */
class ResellerDelegatedAdminRelationshipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResellerDelegatedAdminRelationship
     */

    /**
     * Select specific ResellerDelegatedAdminRelationship properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

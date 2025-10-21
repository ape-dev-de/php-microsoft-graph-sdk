<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectedOrganizationMembers resources
 *
 * Available select fields:
 */
class ConnectedOrganizationMembersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConnectedOrganizationMembers
     */

    /**
     * Select specific ConnectedOrganizationMembers properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectedOrganizationMembers resources
 *
 * Available select fields:
 * - connectedOrganizationId
 * - description
 */
class ConnectedOrganizationMembersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConnectedOrganizationMembers
     */
    public const FIELD_CONNECTED_ORGANIZATION_ID = 'connectedOrganizationId';
    public const FIELD_DESCRIPTION = 'description';

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

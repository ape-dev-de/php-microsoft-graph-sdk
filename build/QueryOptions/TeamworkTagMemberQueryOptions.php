<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkTagMember resources
 *
 * Available select fields:
 * - displayName
 * - tenantId
 * - userId
 */
class TeamworkTagMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkTagMember
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific TeamworkTagMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

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
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific TeamworkTagMember properties
     * 
     * @param array<string> $select Use TeamworkTagMemberQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

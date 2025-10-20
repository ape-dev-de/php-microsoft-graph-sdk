<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupMembers resources
 *
 * Available select fields:
 * - description
 * - groupId
 */
class GroupMembersQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_GROUP_ID = 'groupId';

    /**
     * Select specific GroupMembers properties
     * 
     * @param array<string> $select Use GroupMembersQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

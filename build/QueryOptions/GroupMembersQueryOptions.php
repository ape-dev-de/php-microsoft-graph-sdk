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
    /**
     * Available select fields for GroupMembers
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_GROUP_ID = 'groupId';

    /**
     * Select specific GroupMembers properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

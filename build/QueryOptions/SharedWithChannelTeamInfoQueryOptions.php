<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedWithChannelTeamInfo resources
 *
 * Available select fields:
 * - isHostTeam
 * - allowedMembers
 */
class SharedWithChannelTeamInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedWithChannelTeamInfo
     */
    public const FIELD_IS_HOST_TEAM = 'isHostTeam';
    public const FIELD_ALLOWED_MEMBERS = 'allowedMembers';

    /**
     * Select specific SharedWithChannelTeamInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

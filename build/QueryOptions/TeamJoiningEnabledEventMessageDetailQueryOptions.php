<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamJoiningEnabledEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamId
 */
class TeamJoiningEnabledEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamJoiningEnabledEventMessageDetail
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamJoiningEnabledEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

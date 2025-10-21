<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamJoiningDisabledEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamId
 */
class TeamJoiningDisabledEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamJoiningDisabledEventMessageDetail
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamJoiningDisabledEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

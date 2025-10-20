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
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamJoiningEnabledEventMessageDetail properties
     * 
     * @param array<string> $select Use TeamJoiningEnabledEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

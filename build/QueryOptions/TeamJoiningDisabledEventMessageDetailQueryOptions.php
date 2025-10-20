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
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamJoiningDisabledEventMessageDetail properties
     * 
     * @param array<string> $select Use TeamJoiningDisabledEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
